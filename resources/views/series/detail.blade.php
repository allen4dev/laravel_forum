@extends('layouts.app') 
@section('content')
<section class="Serie">
  <!-- Serie-heading -->
  <header class="Serie-heading">
    <!-- Serie-details -->
    <section class="Serie-details">
      <header class="Serie-detailsHeader">
        <span class="Serie-level">{{ $serie->level }}</span>
        <h1 class="Serie-title">{{ $serie->name }}</h1>
      </header>

      <section class="Serie-description">
        <p class="Serie-descriptionText">
          {{ $serie->description }}
        </p>
      </section>

      <footer class="Serie-footer">
        <div class="Serie-buttonGroup">
          <a href="#" class="Serie-button">Add to watchlist</a>
          <a href="#" class="Serie-button">Notify me</a>
        </div>
      </footer>
    </section>
    <!-- /Serie-details -->

    <!-- Serie-photo -->
    <figure class="Serie-photo">
      <img src="" alt="{{ $serie->name }}" class="Serie-image" />
    </figure>
    <!-- /Serie-photo -->
  </header>
  <!-- /Serie-heading -->

  <!-- Serie-body -->
  <section class="Serie-body">
    <!-- ThreadList -->
    <ul class="ThreadList">
      @foreach ($serie->threads as $thread)
      <li class="ThreadListItem">
        <div class="ThreadListItem-episode">
          <span class="ThreadListItem-number">01</span>
        </div>

        <section class="ThreadListItem-content">
          <header class="ThreadListItem-heading">
            <h2 class="ThreadListItem-title">
              <a href="{{ $thread->path() }}" class="ThreadListItem-link">
                  {{ $thread->title }}
                </a>
            </h2>
          </header>

          <p class="ThreadListItem-description">
            {{ $thread->description }}
          </p>
        </section>
      </li>
      @endforeach
    </ul>
    <!-- /ThreadList -->
  </section>
  <!-- /Serie-body -->
</section>
@endsection