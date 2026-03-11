<?php
$title = "Unspecialist — Thinking in the Internet/AI Age";
$description = "Exploring interdisciplinary thinking, creative independence, and building in public across art, code, design and ideas.";

$og_description = "For builders who refuse to be one thing. Learn in public. Connect disciplines. Build deliberately.";

$jsondata = file_get_contents(__DIR__ . '/../assets/projects.json');

// Convert JSON → PHP array
$projects = json_decode($jsondata, true);
require_once 'includes/header.php';
?>
<main class="container home">
    <section class="center-txt top">
        <h1 class="title">Unspecialist</h1>
        <p class="content">
            <strong>What do you want to be when you grow up?</strong> I had no answer. As a kid, I said <em>"Spy"</em>
            because it sounded cool. As I
            grew I wanted to <strong>design, code, art, edit</strong> and other many things. Bouncing between hobbies,
            and <strong>dropping out of
                degrees</strong>. I finally found my lane: <span><strong
                    class="underlined">Unspecialist</strong></span>.
        </p>
        <div class="form-wrap">
            <form id="newsletter-form">
                <input type="text" name="company" style="display:none">
                <input type="email" name="email" placeholder="Enter your email" required />
                <button type="submit">Join the Journey</button>
                <img src="/assets/arrow.png" alt="arrow pointing arrow">
            </form>
            <div class="caption">
                For occasional insights, projects and ideas worth thinking about.
            </div>
            <p id="form-message" class="form-message" style="display:none;">
                <span class="icon"></span>
                <span class="text"></span>
            </p>
        </div>
    </section>
    <section class="info center-txt">
        <h2>Not a Bluff; Just doing me!</h2>
        <p>
            I create → I fail → I iterate → I share.
        </p>
    </section>
    <section id="projects" class="mt">
        <ul>
            <?php foreach ($projects as $item): ?>
                <li>
                    <div>
                        <h3>
                            <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank">
                                <?= htmlspecialchars($item['title']) ?>
                            </a>
                        </h3>
                        <span> <?= htmlspecialchars($item['status']) ?> </span>
                    </div>
                    <p>
                        <?= htmlspecialchars($item['description']) ?>
                    </p>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="not-for">
        <div class="center-txt">
            <span>Being Unspecialist is</span>
            <h2 class="topic">Not For <span class="rotated-bg">Everyone</span></h2>
        </div>
        <div class="flex mt mb-flex">
            <div class="half">
                <strong>You might feel at home here if:</strong>
                <ul class="checkmark list">
                    <li>You’re curious about many fields</li>
                    <li>You enjoy both creativity and technology</li>
                    <li>You build ideas instead of just consuming them</li>
                    <li>You think independently</li>
                </ul>
            </div>
            <div class="half">
                <strong>Probably not for you if you want:</strong>
                <ul class="crossmark list">
                    <li>Hustle culture motivation</li>
                    <li>Instant formulas for success</li>
                    <li>Viral tricks</li>
                    <li>Passive consumption</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="feed">
        <h2 class="topic center-txt">Latest from the newsletter</h2>
        <div id="rss-feed" class="mt"></div>
        <div class="read-btn mt center-txt">
            <button><a href="https://newsletter.unspecialist.com" target="_blank">Read All Archived Posts</a></button>
        </div>
    </section>
    <section>
        <div class="flex intro mb-max mb-flex">
            <div class="left-box">
                <div class="img-wrap">
                    <img src="/assets/profile-yeden.jpeg" alt="profile of Yeden">
                </div>
            </div>
            <div class="right-box txt-content">
                <p>I’m Yeden, I’m curious about how humans learn, build, and adapt.</p>
                <p>I code, make art, design, teach, and experiment.</p>
                <p>Not because I'm a specialist.</p>
                <p>Because I'm not.</p>
                <div class="mt-s">
                    <p>I operate on 3 non-negotiable principles:</p>
                    <ul>
                        <li><strong>Learn in Public:</strong> Sharing the process exposes weak thinking, improves ideas
                            and attracts the right people.</li>
                        <li><strong>Play the Long Game:</strong> Getting genuinely good at multiple disciplines takes
                            years of learning and building.</li>
                        <li><strong>Master the Essentials, Then Combine:</strong> Real leverage doesn’t come from
                            knowing everything.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
    fetch("/api/rss")
        .then(res => res.json())
        .then(posts => {
            const container = document.getElementById("rss-feed");

            posts.forEach(post => {
                const article = document.createElement("article");

                article.innerHTML = `
        <div>
        <small>${post.pubDate}</small>
        <h3><a href="${post.link}" target="_blank">${post.title}</a></h3>
        <p>${post.description.substring(0, 90)}...</p>
        </div>`;
                container.appendChild(article);
            });
        });
</script>
<script>
    const successIcon = `
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
  <path fill="#5be1a3" fill-rule="evenodd"
    d="M12 21a9 9 0 1 0 0-18a9 9 0 0 0 0 18m-.232-5.36l5-6l-1.536-1.28l-4.3 5.159l-2.225-2.226l-1.414 1.414l3 3l.774.774z"
    clip-rule="evenodd"/>
</svg>`;

    const errorIcon = `
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
  <path fill="#ff4d4f"
    d="M12 2a10 10 0 1 0 0 20a10 10 0 0 0 0-20m3.5 13.5l-1 1L12 13.5l-2.5 2.5l-1-1L11 12L8.5 9.5l1-1L12 10.5l2.5-2.5l1 1L13 12z"/>
</svg>`;

    document.getElementById("newsletter-form").addEventListener("submit", async function (e) {
        e.preventDefault();

        const email = this.email.value;
        const message = document.getElementById("form-message");
        const icon = message.querySelector(".icon");
        const text = message.querySelector(".text");

        try {
            const res = await fetch("/api/subscribe", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "email=" + encodeURIComponent(email)
            });

            if (res.ok) {
                icon.innerHTML = successIcon;
                text.textContent = "You're subscribed.";
                message.classList.remove("error");
                message.classList.add("success");
                message.style.display = "flex";
                this.reset();
            } else {
                throw new Error();
            }

        } catch (err) {
            icon.innerHTML = errorIcon;
            text.textContent = "Something went wrong.";
            message.classList.remove("success");
            message.classList.add("error");
            message.style.display = "flex";
        }finally {
            setTimeout(()=>{
                message.style.display = "none";

            }, 2000);
        }
    });
</script>
<?php require_once 'includes/footer.php'; ?>