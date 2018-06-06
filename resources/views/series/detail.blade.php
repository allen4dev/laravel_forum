@extends('layouts.app') 
@section('content')
<section class="Serie">
  <!-- Serie-heading -->
  <header class="Serie-heading">
    <!-- Serie-details -->
    <section class="Serie-details">
      <header class="Serie-detailsHeader">
        <span class="Serie-level">{Serie level}</span>
        <h1 class="Serie-title">{Serie title}</h1>
      </header>

      <section class="Serie-description">
        <p class="Serie-descriptionText">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam doloribus facilis sit eligendi rerum numquam maxime unde
          nisi pariatur, voluptates sed odit ab. Totam quisquam odit, quos corrupti et omnis?
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
      <img src="" alt="{Serie name}" class="Serie-image" />
    </figure>
    <!-- /Serie-photo -->
  </header>
  <!-- /Serie-heading -->

  <!-- Serie-body -->
  <section class="Serie-body">
    <!-- ThreadList -->
    <ul class="ThreadList">
      <li class="ThreadListItem">
        <div class="ThreadListItem-episode">
          <span class="ThreadListItem-number">01</span>
        </div>

        <section class="ThreadListItem-content">
          <header class="ThreadListItem-heading">
            <h2 class="ThreadListItem-title">
              <a href="/threads/1" class="ThreadListItem-link">
                {Thread title}
              </a>
            </h2>
          </header>

          <p class="ThreadListItem-description">
            {Thread description}
          </p>
        </section>
      </li>
    </ul>
    <!-- /ThreadList -->
  </section>
  <!-- /Serie-body -->
</section>
@endsection