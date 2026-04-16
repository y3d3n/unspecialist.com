<?php
$title = "About Yeden Sherpa — Developer, Artist, and Unspecialist";
$description = "Yeden Sherpa is a fine art graduate from Kathmandu who codes, makes art, builds products, and teaches. Meet the person behind Unspecialist — a platform for multi-disciplinary creators.";
$og_description = "Meet the Unspecialist - building across disciplines, documenting experiments, and designing long-term creative leverage.";
$keywords = "Yeden Sherpa, about, unspecialist, multi-disciplinary creator, web developer Nepal, 3D generalist, artist developer, Kathmandu creator";
$og_image = "https://unspecialist.com/assets/profile-yeden.jpeg";
$schema = [
    "@context" => "https://schema.org",
    "@type" => "ProfilePage",
    "name" => "About Yeden Sherpa",
    "url" => "https://unspecialist.com/about",
    "description" => "Yeden Sherpa is a multi-disciplinary creator from Kathmandu — web developer, artist, 3D generalist, product builder, and teacher. Founder of Unspecialist.",
    "mainEntity" => [
        "@type" => "Person",
        "name" => "Yeden Sherpa",
        "url" => "https://unspecialist.com",
        "image" => "https://unspecialist.com/assets/profile-yeden.jpeg",
        "jobTitle" => "Creator, Developer, Artist, Teacher",
        "description" => "Fine art graduate from Kathmandu. I code, make art, design, teach, and experiment — not because I planned it that way, but because I couldn't stop.",
        "alumniOf" => [
            "@type" => "EducationalOrganization",
            "name" => "Kathmandu University, School of Arts, Department of Art & Design"
        ],
        "knowsAbout" => [
            "Web App Development",
            "3D Design",
            "Blender",
            "Fine Art",
            "Product Building",
            "Teaching",
            "Creative Direction",
            "Interdisciplinary Thinking"
        ],
        "hasOccupation" => [
            [
                "@type" => "Occupation",
                "name" => "Web App Developer",
                "description" => "Started career as PHP developer in 2013, hired for the position of designer."
            ],
            [
                "@type" => "Occupation",
                "name" => "Artist",
                "description" => "Expressing thoughts and ideas in various mediums depending upon the complexity of the thought process."
            ],
            [
                "@type" => "Occupation",
                "name" => "3D Generalist",
                "description" => "Combining art, storytelling and technical problem-solving in Blender and 3D tools."
            ],
            [
                "@type" => "Occupation",
                "name" => "Product Builder",
                "description" => "Turning ideas into products, launching, and learning from what happens next."
            ],
            [
                "@type" => "Occupation",
                "name" => "Teacher",
                "description" => "Sharing knowledge across YouTube and other platforms for creators and learners."
            ]
        ],
        "sameAs" => [
            "https://www.youtube.com/@imunspecialist",
            "https://www.youtube.com/@Y3DS",
            "https://x.com/theunspecialist",
            "https://nativetype.com"
        ]
    ]
];

require_once 'includes/header.php';
?>
<main class="container about">
    <h1 class="md-title">
        Not a specialist. <br>
Not a generalist. <br>
I'm Yeden Sherpa.
    </h1>
    <div class="mt">
        <p>I’ve always had a hard time answering <strong>“What do
                you do?”</strong> I had no clear & simple title. </p>
        <p>
            I explore art, code, systems, and ideas. So depending on when you asked me:</p>
        <ul class="mt listContainer">
            <li>
                <strong>Web App Developer:</strong>
                Started my career as PHP developer in 2013. Funny part I was hired for the position of designer.
            </li>
            <li>
                <strong>Artist:</strong>
                Art has always been my way of <a target="_blank" href="https://kathmandupost.com/miscellaneous/2018/09/29/passing-on-the-baton#:~:text=The%20other%20theme,value%20at%20all." aria-label="How writer felt void and existential cricis watching Yeden's art work">expressing thoughts and ideas</a>  in various medium depending upon the complexity of the thought process.
            </li>
            <li>
                <strong>3D Generalist:</strong>
                I love to combine art, storytelling and technical problem-solving in a way that feels natural to me.
            </li>
            <li>
                <strong>Product Builder:</strong>
                I like turning ideas into products launching, and learning from what happens next.
            </li>
            <li>
                <strong>Teacher:</strong>
                Once I hated teachers because I couldn't learn their way.
               So I became best teacher for myself and now I share with others too.
            </li>
        </ul>
        <p class="mt pitch">
            <strong>
                Unspecialist exists because doing more than one thing seriously is still treated as a problem to fix. It isn't.
            </strong>
        </p>
    </div>
    <section class="dos-n-donts">
        <div>
            <h3>Things I like</h3>
            <ul>
                <li><a target="_blank" href="https://yeden.com.np" class="link" aria-label="Artworks by Yeden Sherpa">Creative Control</a></li>
                <li><a target="_blank" href="https://newsletter.unspecialist.com" class="link" aria-label="Newsletter by Yeden Sherpa">Deep Thinking</a></li>
                <li><a target="_blank" href="https://www.youtube.com/@hubermanlab" class="link" aria-label="Youtube of Andrew Huberman">Andrew Huberman</a> </li>
                <li><a target="_blank" href="https://chess.com" class="link" aria-label="chess.com">Chess</a></li>
                <li><a target="_blank" href="https://www.youtube.com/@y3ds/" class="link" aria-label="Yeden teaching Blender">Teaching</a></li>
                <li><a target="_blank" href="https://www.imdb.com/name/nm0634240/?ref_=ext_shr_lnk" class="link" aria-label="IMDB Christopher Nolan">Christopher Nolan</a> </li>
                <li><a target="_blank" href="https://www.youtube.com/@AndreaBocelli/" class="link" aria-label="Classic Singer Andrea Bocelli">Andrea Bocelli</a></li>
                <li><a target="_blank" href="https://www.youtube.com/@StarTalk/" class="link" aria-label="Podcast by Neil deGrasse Tyson">StarTalk</a></li>
            </ul>
        </div>
        <div>
            <h3>Big NO NO!</h3>
            <ul>
                <li><a href="#" onclick="event.preventDefault();" class="dis-link" aria-label="Don't preach me about your religious and political beliefs">Dogma</a> </li>
                <li><a href="#" onclick="event.preventDefault();" class="dis-link" aria-label="I don't chase virality and hupes">Hypes</a></li>
                <li><a href="#" onclick="event.preventDefault();" class="dis-link" aria-label="The only thing I in this world is clickbaits">Clickbait</a></li>
                <li><a href="#" onclick="event.preventDefault();" class="dis-link" aria-label="I don't give and take superficial advice">Superficial Advice</a></li>
                <li><a href="#" onclick="event.preventDefault();" class="dis-link" aria-label="I live for living">Status Games</a></li>
                <li><a href="#" onclick="event.preventDefault();" class="dis-link" aria-label="Yes, I don't want just talking">Just Talking</a></li>
                <li><a href="#" onclick="event.preventDefault();" class="dis-link" aria-label="I love to stay in quiet places">Noise</a></li>
            </ul>
        </div>
        <div style="line-height:160%;">
            <a href="/manifesto" aria-label="Read the Unspecialist manifesto">Read the Manifesto →</a> <br> or <br> <a href="/tech">See What Tech and Tools I use →</a>
        </div>
    </section>
</main>
<?php require_once 'includes/footer.php'; ?>