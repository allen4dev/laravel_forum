@extends('layouts.app') 
@section('content')
<section class="Search">
  <!-- Filters -->
  <section class="Filters">
    <section class="Filter">
      <!-- Filter-heading -->
      <header class="Filter-heading">
        <h2 class="Filter-title">Search</h2>
      </header>
      <!-- /Filter-heading -->

      <!-- Filter-body -->
      <section class="Filter-body">
        <form class="Filter-search">
          <input class="Filter-searchInput" type="text" />
        </form>
      </section>
      <!-- /Filter-body -->
    </section>

    <section class="Filter">
      <!-- Filter-heading -->
      <header class="Filter-heading">
        <h2 class="Filter-title">Skill type</h2>
      </header>
      <!-- /Filter-heading -->

      <!-- Filter-body -->
      <section class="Filter-body">
        <form class="Filter-tags">
          <label class="Filter-label">
            <input class="Filter-tag" type="checkbox" /> Laravel
          </label>

          <label class="Filter-label">
            <input class="Filter-tag" type="checkbox" /> Tooling
          </label>

          <label class="Filter-label">
            <input class="Filter-tag" type="checkbox" /> JavaScript
          </label>

          <label class="Filter-label">
            <input class="Filter-tag" type="checkbox" /> PHP
          </label>

          <label class="Filter-label">
            <input class="Filter-tag" type="checkbox" /> Testing
          </label>
        </form>
      </section>
      <!-- /Filter-body -->
    </section>
  </section>
  <!-- /Filters -->

  <!-- /Results -->
  <ul class="Results">
    @forelse ($results as $result)

    <li class="Result">
      <header class="Result-heading">
        <h3 class="Result-title">{{ $result->title }}</h3>
      </header>

      <section class="Result-body">
        <h4 class="Result-serie">{Thread serie}</h4>
        <span class="Result-episode">{Thread episode}</span>
      </section>

      <footer class="Result-footer">
        <span class="Result-tag">{Serie tag}</span>
        <span class="Result-date">{{ $result->created_at }}</span>
        <span class="Result-level">{Serie level}</span>
      </footer>
    </li>
    @empty @endforelse
  </ul>
  <!-- /Results -->
</section>
@endsection