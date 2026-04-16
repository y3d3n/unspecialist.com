<?php
$title = "Unspecialist — The World Wants You Small. Don't Listen.";
$description = "Unspecialist is a platform for multi-passionate creators who go deep in more than one field. Essays, tools, and honest work by Yeden Sherpa — artist, developer, 3D generalist, teacher.";

$og_description = "For builders who refuse to be one thing. Learn in public. Connect disciplines. Build deliberately.";

$jsondata = file_get_contents(__DIR__ . '/../assets/projects.json');

// Convert JSON → PHP array
$projects = json_decode($jsondata, true);


$schema = [
    "@context" => "https://schema.org",
    "@type" => "Person",
    "name" => "Yeden Sherpa",
    "url" => "https://unspecialist.com",
    "sameAs" => [
        "https://www.youtube.com/@imunspecialist",
        "https://www.youtube.com/@Y3DS",
        "https://x.com/yedensherpa",
        "https://www.linkedin.com/in/yedensherpa"
    ],
    "jobTitle" => "Creator, Developer, Artist",
    "description" => "ulti-disciplinary creator from Kathmandu. Artist, developer, 3D generalist, teacher, and founder of Unspecialist.",
    "knowsAbout" => [
        "Web App Development",
        "3D Design",
        "Blender",
        "Creative Direction",
        "Product Building",
        "Fine Arts",
        "Teaching"
    ]
];

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
            <form class="newsletter-form">
                <img class="nt-icon" src="/assets/compass.png" alt="north star icon">
                <input type="text" name="company" style="display:none">
                <input type="email" name="email" placeholder="Enter your email" required />
                <button type="submit">Think With Me</button>
                <img class="arrow" src="/assets/arrow.png" alt="arrow pointing arrow">
            </form>
            <div class="caption">
                Not a build log. A depth dispatch.
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
            Unspecialist is a world, the body of work I build.
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
                    <p class="mt-xs">
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
                    <li>You believe depth in many fields beats mastery in one</li>
                    <li>You're searching for the idea that connects everything</li>
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
        <div class="center-txt mt">
            If you're still reading, you already know which side you're on.
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
                <h2 class="topic">Not a specialist. <br>
                    Not a generalist. <br>
                    I'm Yeden Sherpa.
                </h2>
                <p class="mt lh-160">
                    Fine art graduate from Kathmandu.
                    I code, make art, design, teach, and experiment — not because I planned it that way, but because I couldn't stop.

                </p>
                <p class="mt-s">
                    I started Unspecialist because I kept being told to pick one thing, and I kept refusing.
                </p>
            </div>
            <div class="right-box txt-content">
                <div class="img-wrap">
                    <img src="/assets/profile-yeden.jpeg" alt="Profile of Yeden Sherpa"
                        aria-label="Profile of Yeden Sherpa">
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
<?php include __DIR__ . '/../includes/ctascript.php'; ?>
<?php require_once 'includes/footer.php'; ?>