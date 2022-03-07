---
title: Code Snippets
---
@extends('_layouts.master')

@section('hero')
<h2 class="mb-0">Code Snippets</h2>
@endsection

@section('body')
<div>
    <div><strong>SCP</strong></div>
    <div><code>scp source_file user@host:target_file</code></div>
</div>

<div class="mt-4">
    <div><strong>MySQL</strong></div>
    <div class="mb-2"><code>mysql database_file &lt; file_name.sql</code> Import a sql file</div>
    <div><code>mysqldump -u user -p password database_name &gt; file_name.sql</code> Export a sql file</div>
</div>

<div class="mt-4">
    <div><strong>PostgreSQL</strong></div>
    <div class="mb-2"><code>docker-compose run --rm postgres-db psql -h postgres-db database_name</code> Login to database running in docker compose</div>
    <div class="mb-2"><code>docker-compose run --rm postgres-db createdb -h postgres-db database_name</code> Create database running in docker compose</div>
    <div class="mb-2"><code>docker-compose run --rm postgres-db dropdb -h postgres-db database_name</code> Drop database running in docker compose</div>
</div>

<div class="mt-4">
    <div><strong>Docker</strong></div>
    <div class="mb-2"><code>docker rmi $(docker images -q)</code> Remove all images</div>
    <div class="mb-2"><code>docker rm $(docker ps -aq)</code> Remove all containers</div>
    <div><code>docker inspect -f '&#123;&#123; .Mounts &#125;&#125;' containerId</code> List mounted volumes for a container</div>
</div>

<div class="mt-4">
    <div><strong>Node</strong></div>
    <div class="mb-2"><code>npm test -- --runTestsByPath src/test/integration</code> Run specific tests</div>
    <div><code>DEBUG=knex:* npm test -- --runByPath src/test/integration</code> Run specific tests and debug queries</div>
</div>
@endsection
