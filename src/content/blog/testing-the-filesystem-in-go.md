---
title: Testing the Filesystem in Go
description: Learn about how to test the filesystem in Go using Afero
pubDate: 2024-05-24
---

I've been working on [pal](https://github.com/jaytyrrell13/pal), a CLI tool to generate shell aliases for each of your projects. It needs to interact with the filesystem to read a config file and write a `.pal` file that includes the aliases. I wanted to start writing tests for reading/writing files but struggled to figure out how to do that until I came across [afero](https://github.com/spf13/afero), a filesystem abstraction written by [Steve Francia](https://spf13.com/).

To use afero, I needed to call it instead of [os](https://pkg.go.dev/os@go1.22.3).

For example, in my utils, I have a function that checks if a file is missing like this:

```go
func FileMissing(path string) bool {
	_, e := os.Stat(path)
	return errors.Is(e, os.ErrNotExist)
}
```

To be able to call afero, I need to pass in the `afero.Fs` object as a parameter and update the call to `os.Stat(path)`.

```go
func FileMissing(fs afero.Fs, path string) bool {
	_, e := fs.Stat(path)
	return errors.Is(e, os.ErrNotExist)
}
```

I then needed to update the usages of `FileMissing` to pass in the filesystem:

```go
var AppFs = afero.NewOsFs()
if pkg.FileMissing(AppFs, "/file/path/here") {
	//
}
```

Once I did that, I was able to start writing tests.

First, I created a struct to handle each of test case.

```go
type fileMissingTestCase struct {
	path     string
	expected bool
}
```

Then wrote the test function and added two test cases using the struct.

```go
func TestFileMissing(t *testing.T) {
	cases := []fileMissingTestCase{
		{"tmp/foo.txt", true},
		{"tmp/bar.txt", false},
	}

	// ...
}
```

This has the two test cases where I'll be checking if "tmp/foo.txt" and "tmp/bar.txt" exist. In my test, I set it up where the "tmp/bar.txt" file exists but "tmp/foo.txt" does not.

`appFs := afero.NewMemMapFs()` is creating a new in-memory filesystem to use within this test. Then I'm creating a "temp" directory and writing the "bar.txt" file.

```go
appFs := afero.NewMemMapFs()
mkdirErr := appFs.Mkdir("temp", 0o755)
if mkdirErr != nil {
	t.Errorf("Mkdir Error: %q", mkdirErr)
}

writeFileErr := afero.WriteFile(appFs, "tmp/bar.txt", []byte("bar file"), 0o644)
if writeFileErr != nil {
	t.Errorf("WriteFile Error: %q", writeFileErr)
}
```

Now, I'm able to iterate over the test cases and check that I get the expected value from `pkg.FileMissing()`.

```go
for _, tc := range cases {
	t.Run(fmt.Sprintf("Path: %q", tc.path), func(t *testing.T) {
		got := FileMissing(appFs, tc.path)

		if got != tc.expected {
			t.Errorf("Expected 'false', but got '%v'", got)
		}
	})
}
```

Here's the full test:

```go
type fileMissingTestCase struct {
	path     string
	expected bool
}

func TestFileMissing(t *testing.T) {
	cases := []fileMissingTestCase{
		{"tmp/foo.txt", true},
		{"tmp/bar.txt", false},
	}

	appFs := afero.NewMemMapFs()
	mkdirErr := appFs.Mkdir("temp", 0o755)
	if mkdirErr != nil {
		t.Errorf("Mkdir Error: %q", mkdirErr)
	}

	writeFileErr := afero.WriteFile(appFs, "tmp/bar.txt", []byte("bar file"), 0o644)
	if writeFileErr != nil {
		t.Errorf("WriteFile Error: %q", writeFileErr)
	}

	for _, tc := range cases {
		t.Run(fmt.Sprintf("Path: %q", tc.path), func(t *testing.T) {
			got := FileMissing(appFs, tc.path)

			if got != tc.expected {
				t.Errorf("Expected '%v', but got '%v'", tc.expected, got)
			}
		})
	}
}
```
