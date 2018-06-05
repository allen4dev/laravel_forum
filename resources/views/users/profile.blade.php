@extends ('layouts.app') 
@section ('content')
<section class="Profile">
  <!-- Profile-heading -->
  <header class="Profile-heading">
    <figure class="Avatar">
      <img class="Avatar-photo" src="{User photo}" alt="{User name}" />
    </figure>

    <section class="Profile-headingContent">
      <!-- Profile-userInfo -->
      <section class="Profile-info">
        <h2 class="Profile-username">{Username}</h2>
        <h3 class="Profile-occupation">{User occupation}</h3>
        <h4 class="Profile-location">{User location}</h4>
      </section>
      <!-- /Profile-userInfo -->

      <!-- Profile-userDetails -->
      <ul class="Profile-details">
        <li class="Profile-detail">
          <h4 class="Profile-detailTitle">Threads</h4>
          <span class="Profile-detailCount">{Threads count}</span>
        </li>

        <li class="Profile-detail">
          <h4 class="Profile-detailTitle">Replies</h4>
          <span class="Profile-detailCount">{Replies count}</span>
        </li>

        <li class="Profile-detail">
          <h4 class="Profile-detailTitle">Favorites</h4>
          <span class="Profile-detailCount">{Favorites count}</span>
        </li>
      </ul>
      <!-- Profile-userDetails -->
    </section>
  </header>
  <!-- Profile-heading -->

  <!-- Activities -->
  <section class="Activities">
    <article class="Activity">
      <h4 class="Activity-title">
        <a href="/users/1">{Username}</a> left a reply on {Reply title} <span class="Reply-date">2 months ago</span>
      </h4>
      <p class="Activity-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique sapiente autem nemo amet nesciunt aliquam tenetur deserunt,
        facere explicabo ab reiciendis, eligendi harum voluptates dicta inventore debitis enim? Magni, expedita.
      </p>
    </article>

    <article class="Activity">
      <h4 class="Activity-title">
        <a href="/users/1">{Username}</a> left a reply on {Reply title} <span class="Reply-date">2 months ago</span>
      </h4>
      <p class="Activity-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique sapiente autem nemo amet nesciunt aliquam tenetur deserunt,
        facere explicabo ab reiciendis, eligendi harum voluptates dicta inventore debitis enim? Magni, expedita.
      </p>
    </article>

    <article class="Activity">
      <h4 class="Activity-title">
        <a href="/users/1">{Username}</a> left a reply on {Reply title} <span class="Reply-date">2 months ago</span>
      </h4>
      <p class="Activity-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique sapiente autem nemo amet nesciunt aliquam tenetur deserunt,
        facere explicabo ab reiciendis, eligendi harum voluptates dicta inventore debitis enim? Magni, expedita.
      </p>
    </article>

    <article class="Activity">
      <h4 class="Activity-title">
        <a href="/users/1">{Username}</a> left a reply on {Reply title} <span class="Reply-date">2 months ago</span>
      </h4>
      <p class="Activity-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique sapiente autem nemo amet nesciunt aliquam tenetur deserunt,
        facere explicabo ab reiciendis, eligendi harum voluptates dicta inventore debitis enim? Magni, expedita.
      </p>
    </article>

    <article class="Activity">
      <h4 class="Activity-title">
        <a href="/users/1">{Username}</a> left a reply on {Reply title} <span class="Reply-date">2 months ago</span>
      </h4>
      <p class="Activity-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique sapiente autem nemo amet nesciunt aliquam tenetur deserunt,
        facere explicabo ab reiciendis, eligendi harum voluptates dicta inventore debitis enim? Magni, expedita.
      </p>
    </article>
  </section>
  <!-- /Activities -->
</section>
@endsection