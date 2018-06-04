@extends ('layouts.app') 
@section ('content')
<section class="Home">
    <!-- Hero -->
    <section class="Hero">
        <div class="Hero-content">
            <h1 class="Hero-title">Its kinda like netflix for your career!</h1>

            <p class="Hero-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis mollitia nihil esse, at ipsam officia consectetur fuga
                reprehenderit velit expedita vitae repellat voluptatem doloremque dolor? Quibusdam soluta corporis aliquid
                quos.
            </p>

            <div class="Hero-actions">
                <a href="#" class="Hero-link">Get started</a>
                <a href="#" class="Hero-link">Browse now</a>
            </div>

            <figure class="Hero-photo">
                <img src="" alt="Forum hero" class="Hero-image" />
            </figure>
        </div>
    </section>
    <!-- /Hero -->

    <!-- Skills -->
    <ul class="Skills">
        <li class="Skill">
            <figure class="Skill-photo">
                <img class="Skill-image" src="" alt="Skill name" />
            </figure>
            <h2 class="Skill-title">{Skill title}</h2>
            <span class="Skill-seriesCount">{Skill series count}</span>
            <span class="Skill-lessonsCount">{Skill lessons count}</span>
        </li>

        <li class="Skill">
            <figure class="Skill-photo">
                <img class="Skill-image" src="" alt="Skill name" />
            </figure>
            <h2 class="Skill-title">{Skill title}</h2>
            <span class="Skill-seriesCount">{Skill series count}</span>
            <span class="Skill-lessonsCount">{Skill lessons count}</span>
        </li>

        <li class="Skill">
            <figure class="Skill-photo">
                <img class="Skill-image" src="" alt="Skill name" />
            </figure>
            <h2 class="Skill-title">{Skill title}</h2>
            <span class="Skill-seriesCount">{Skill series count}</span>
            <span class="Skill-lessonsCount">{Skill lessons count}</span>
        </li>

        <li class="Skill">
            <figure class="Skill-photo">
                <img class="Skill-image" src="" alt="Skill name" />
            </figure>
            <h2 class="Skill-title">{Skill title}</h2>
            <span class="Skill-seriesCount">{Skill series count}</span>
            <span class="Skill-lessonsCount">{Skill lessons count}</span>
        </li>

        <li class="Skill">
            <figure class="Skill-photo">
                <img class="Skill-image" src="" alt="Skill name" />
            </figure>
            <h2 class="Skill-title">{Skill title}</h2>
            <span class="Skill-seriesCount">{Skill series count}</span>
            <span class="Skill-lessonsCount">{Skill lessons count}</span>
        </li>

    </ul>
    <!-- /Skills -->

    <!-- About -->
    <section class="About">
        <h2 class="About-heading">The most concise screencasts for the working developer, updated daily.</h2>
        <p class="About-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio sapiente provident ad nisi sunt laboriosam, necessitatibus
            iusto qui perferendis similique, modi cupiditate repellat. Nam fugiat quis eaque, voluptatem vel ratione!
        </p>
    </section>
    <!-- /About -->

    <!-- ThreadList -->
    <section class="ThreadList">
        <article class="ThreadList-items">
            <article class="ThreadItem">
                <header class="ThreadItem-heading">
                    <a href="#" class="ThreadItem-skillLink">
                        <span class="ThreadItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadItem-body">
                    <h4 class="ThreadItem-title">
                        <a href="#" class="ThreadItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadItem-footer">
                    <div class="ThreadItem-info">
                        <span class="ThreadItem-count ThreadItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadItem-count ThreadItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadItem">
                <header class="ThreadItem-heading">
                    <a href="#" class="ThreadItem-skillLink">
                        <span class="ThreadItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadItem-body">
                    <h4 class="ThreadItem-title">
                        <a href="#" class="ThreadItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadItem-footer">
                    <div class="ThreadItem-info">
                        <span class="ThreadItem-count ThreadItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadItem-count ThreadItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadItem">
                <header class="ThreadItem-heading">
                    <a href="#" class="ThreadItem-skillLink">
                        <span class="ThreadItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadItem-body">
                    <h4 class="ThreadItem-title">
                        <a href="#" class="ThreadItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadItem-footer">
                    <div class="ThreadItem-info">
                        <span class="ThreadItem-count ThreadItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadItem-count ThreadItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadItem">
                <header class="ThreadItem-heading">
                    <a href="#" class="ThreadItem-skillLink">
                        <span class="ThreadItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadItem-body">
                    <h4 class="ThreadItem-title">
                        <a href="#" class="ThreadItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadItem-footer">
                    <div class="ThreadItem-info">
                        <span class="ThreadItem-count ThreadItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadItem-count ThreadItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadItem">
                <header class="ThreadItem-heading">
                    <a href="#" class="ThreadItem-skillLink">
                        <span class="ThreadItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadItem-body">
                    <h4 class="ThreadItem-title">
                        <a href="#" class="ThreadItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadItem-footer">
                    <div class="ThreadItem-info">
                        <span class="ThreadItem-count ThreadItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadItem-count ThreadItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadItem">
                <header class="ThreadItem-heading">
                    <a href="#" class="ThreadItem-skillLink">
                        <span class="ThreadItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadItem-body">
                    <h4 class="ThreadItem-title">
                        <a href="#" class="ThreadItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadItem-footer">
                    <div class="ThreadItem-info">
                        <span class="ThreadItem-count ThreadItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadItem-count ThreadItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadItem">
                <header class="ThreadItem-heading">
                    <a href="#" class="ThreadItem-skillLink">
                        <span class="ThreadItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadItem-body">
                    <h4 class="ThreadItem-title">
                        <a href="#" class="ThreadItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadItem-footer">
                    <div class="ThreadItem-info">
                        <span class="ThreadItem-count ThreadItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadItem-count ThreadItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

            <article class="ThreadItem">
                <header class="ThreadItem-heading">
                    <a href="#" class="ThreadItem-skillLink">
                        <span class="ThreadItem-skillName">{Thread skill}</span>
                    </a>
                </header>

                <section class="ThreadItem-body">
                    <h4 class="ThreadItem-title">
                        <a href="#" class="ThreadItem-link">
                            {Thread title}
                        </a>
                    </h4>
                </section>

                <footer class="ThreadItem-footer">
                    <div class="ThreadItem-info">
                        <span class="ThreadItem-count ThreadItem-lessonsCount">{Thread lessons count}</span>
                        <span class="ThreadItem-count ThreadItem-level">{Thread level}</span>
                    </div>
                </footer>
            </article>

        </article>

        <a class="ThreadList-button" href="#" />> Show more
        </a>
        </a>
        <!-- /ThreadList -->
    </section>
@endsection