@extends('layouts.app') 
@section('content')
<section class="Skill">
  <!-- Skill-heading -->
  <header class="Skill-heading">
    <section class="Skill-details">
      <header class="Skill-detailsHeading">
        <span class="Skill-tag tag">Skill</span>
        <h2 class="Skill-title">{{ $skill->name }}</h2>
      </header>

      <p class="Skill-description">
        {{ $skill->description }}
      </p>
    </section>

    <figure class="Skill-photo">
      <img src="" alt="{{ $skill->name }}" class="Skill-image" />
    </figure>
  </header>
  <!-- /Skill-heading -->

  <!-- Series -->
  <section class="Series">
    @forelse ($skill->series as $serie)
    <article class="SerieItem">
      <header class="SerieItem-heading">
        <a href="#" class="Serie-skillLink">
          <span class="Serie-skillName">{{ $skill->name}}</span>
        </a>

        <span class="SerieItem-step">Step 1</span>
      </header>

      <section class="SerieItem-body">
        <h4 class="Serie-title">
          <a href="/series/1" class="SerieItem-link">
              {{ $serie->name}}
            </a>
        </h4>
      </section>

      <footer class="SerieItem-footer">
        <div class="Serie-info">
          <span class="Serie-count Serie-lessonsCount">{Serie lessons count}</span>
          <span class="SerieItem-count Serie-level">{{ $serie->level }}</span>
        </div>
      </footer>
    </article>
    @empty
    <p class="message">This skill does not have series.</p>
    @endforelse
  </section>
  <!-- /Series -->
</section>
@endsection