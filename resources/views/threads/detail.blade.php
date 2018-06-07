@extends ('layouts.app') 
@section ('content')
<article class="Thread">
  <!-- Thread-heading -->
  <header class="Thread-heading">
    <div class="Thread-headingTitle">
      <h1 class="Thread-title">{{ $thread->title }}</h1>
    </div>

    <section class="Thread-headingContent">
      <div class="Thread-info">
        <span class="Thread-skill">
          <strong>
              {{ $thread->skill->name }}</span>
        </strong> |
        <span class="Thread-author">
          {{ $thread->user->name }}
        </span>
      </div>

      <!-- Thread-description -->
      <section class="Thread-details">
        <p class="Thread-description">{{ $thread->description }}</p>
      </section>
    </section>
    <!-- /Thread-description -->
  </header>
  <!-- /Thread-heading -->

  <!-- Thread-content -->
  <section class="Thread-content">
    <p class="Thread-body">
      {{ $thread->body }}
    </p>
  </section>
  <!-- /Thread-content -->

  <!-- /Thread-footer -->
  <footer class="Thread-footer">
    <!-- CommmentsSection -->
    <section class="RepliesSection">

      <header class="RepliesSection-heading">
        <h4 class="RepliesSection-title">{Thread Replies count} Replies</h4>
      </header>

      <!-- ReplyBar -->
      <section class="ReplyBar">
        <figure class="Avatar">
          <img class="Avatar-photo" src="{User photo}" alt="{User name}" />
        </figure>

        <form class="ReplyBar-form">
          <input type="text" class="ReplyBar-input" placeholder="Join the discussion..." />
        </form>

        <footer class="ReplyBar-footer">
          <ul class="ReplyBar-socialLogin">
            <li class="ReplyBar-socialItem">F</li>
            <li class="ReplyBar-socialItem">T</li>
            <li class="ReplyBar-socialItem">G</li>
          </ul>
        </footer>
      </section>
      <!-- /ReplyBar -->

      <!-- ReplyList -->
      <ul class="ReplyList">
        @forelse ($thread->replies as $reply)
        <li class="Reply">
          <header class="Reply-heading">
            <figure class="Avatar">
              <img class="Avatar-photo" src="{User photo}" alt="{User name}" />
            </figure>

            <section class="Reply-details">
              <h4 class="Reply-username">
                <a href="/users/1" class="Reply-userlink">{Username}</a>
              </h4>

              <p class="Reply-body">
                {{ $reply->body }}
              </p>
            </section>
          </header>

          <section class="Reply-meta">
            <p>
              {Reply meta information (photos, code examples, etc)}
            </p>
          </section>

          <footer class="Reply-responses">
            {More ReplyList Here}
          </footer>
        </li>
        @empty
        <p class="Message">This thread has no replies.</p>
        @endforelse
      </ul>
      <!-- /ReplyList -->
    </section>
    <!-- /CommmentsSection -->

    <!-- Thread-recommendations -->
    <ul class="Thread-recommendations">
      <li class="Thread-recommendation">
        <a href="#" class="Thread-recommendationTitle">{Thread title}</a>
        <span class="Thread-recommendation-skill">{Thread skill}</span>
      </li>

      <li class="Thread-recommendation">
        <a href="#" class="Thread-recommendationTitle">{Thread title}</a>
        <span class="Thread-recommendation-skill">{Thread skill}</span>
      </li>

      <li class="Thread-recommendation">
        <a href="#" class="Thread-recommendationTitle">{Thread title}</a>
        <span class="Thread-recommendation-skill">{Thread skill}</span>
      </li>

      <li class="Thread-recommendation">
        <a href="#" class="Thread-recommendationTitle">{Thread title}</a>
        <span class="Thread-recommendation-skill">{Thread skill}</span>
      </li>

      <li class="Thread-recommendation">
        <a href="#" class="Thread-recommendationTitle">{Thread title}</a>
        <span class="Thread-recommendation-skill">{Thread skill}</span>
      </li>
    </ul>
    <!-- /Thread-recommendations -->
  </footer>
</article>
@endsection