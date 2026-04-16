<?php
$title = "Tools & Tech I Actually Use — Yeden Sherpa | Unspecialist";
$description = "A curated list of gear, tools, and software Yeden Sherpa actually uses — MacBook Air M4, Blender, VS Code, Claude, DaVinci Resolve, Anytype and more. No hype. No FOMO. Just what works.";
$keywords = "tools I use, tech stack, Yeden Sherpa tools, Blender setup, VS Code, DaVinci Resolve, MacBook Air M4, creator tools, unspecialist tech, best tools for creators";
$og_description = "Meeth the Unspecialist - building across disciplines, documenting experiments, and designing long-term creative leverage.";

$schema = [
    "@context" => "https://schema.org",
    "@type" => "ItemList",
    "name" => "Tools & Tech I Actually Use",
    "description" => "A curated list of gear, software, and tools used by Yeden Sherpa — multi-disciplinary creator, developer, and 3D generalist. No hype cycles. Just honest recommendations.",
    "url" => "https://unspecialist.com/tech",
    "author" => [
        "@type" => "Person",
        "name" => "Yeden Sherpa",
        "url" => "https://unspecialist.com"
    ],
    "publisher" => [
        "@type" => "Organization",
        "name" => "Unspecialist",
        "url" => "https://unspecialist.com",
        "logo" => [
            "@type" => "ImageObject",
            "url" => "https://unspecialist.com/assets/compass.png"
        ]
    ],
    "mainEntityOfPage" => [
        "@type" => "WebPage",
        "@id" => "https://unspecialist.com/tech"
    ],
    "itemListElement" => [

        // ── GEARS ──────────────────────────────────────────────

        [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "MacBook Air M4 - 13\"",
            "item" => [
                "@type" => "Product",
                "name" => "MacBook Air M4 13-inch",
                "description" => "Fanless, light and fast enough for DaVinci, Figma, and Blender works. Recommended over any pro devices for video editing, photography, and office works.",
                "brand" => [
                    "@type" => "Brand",
                    "name" => "Apple"
                ],
                "category" => "Laptop / Hardware"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 2,
            "name" => "iPhone 15 Pro Max",
            "item" => [
                "@type" => "Product",
                "name" => "iPhone 15 Pro Max",
                "description" => "Go-to 48MP camera for anything creative captures. Works perfectly with the Apple ecosystem.",
                "brand" => [
                    "@type" => "Brand",
                    "name" => "Apple"
                ],
                "category" => "Smartphone / Hardware"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 3,
            "name" => "AJAZZ AK980",
            "item" => [
                "@type" => "Product",
                "name" => "AJAZZ AK980 Mechanical Keyboard",
                "description" => "A value-for-money mechanical keyboard with numpad for Blender use. Amazing typing experience with satisfying clicking sounds.",
                "brand" => [
                    "@type" => "Brand",
                    "name" => "AJAZZ"
                ],
                "category" => "Keyboard / Hardware"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 4,
            "name" => "KZ Caster Pro",
            "item" => [
                "@type" => "Product",
                "name" => "KZ Caster Pro IEM",
                "description" => "Used for podcast, games, and music. Detailed, controlled and satisfying sound quality. Recommended over expensive wireless earbuds and AirPods for mid-range IEM value.",
                "brand" => [
                    "@type" => "Brand",
                    "name" => "KZ"
                ],
                "category" => "Audio / Hardware"
            ]
        ],

        // ── TOOLS OF CHOICE ────────────────────────────────────

        [
            "@type" => "ListItem",
            "position" => 5,
            "name" => "Blender",
            "item" => [
                "@type" => "SoftwareApplication",
                "name" => "Blender",
                "url" => "https://www.blender.org",
                "description" => "Primary 3D tool. Switched at version 2.80 from C4D, Maya, Max, Keyshot, and ZBrush. Never looked back. The best place to start 3D — everything else is extra.",
                "applicationCategory" => "3D Software / Creative Tool",
                "offers" => [
                    "@type" => "Offer",
                    "price" => "0",
                    "priceCurrency" => "USD"
                ]
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 6,
            "name" => "VS Code",
            "item" => [
                "@type" => "SoftwareApplication",
                "name" => "Visual Studio Code",
                "url" => "https://code.visualstudio.com",
                "description" => "The default code editor. Tried many others and always comes back. Good enough isn't a compromise.",
                "applicationCategory" => "Code Editor / Developer Tool",
                "offers" => [
                    "@type" => "Offer",
                    "price" => "0",
                    "priceCurrency" => "USD"
                ]
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 7,
            "name" => "Claude",
            "item" => [
                "@type" => "SoftwareApplication",
                "name" => "Claude by Anthropic",
                "url" => "https://claude.ai",
                "description" => "Used as a second brain for research, logic, debugging, and writing code.",
                "applicationCategory" => "AI Assistant / Productivity Tool"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 8,
            "name" => "Anytype",
            "item" => [
                "@type" => "SoftwareApplication",
                "name" => "Anytype",
                "url" => "https://anytype.io",
                "description" => "Projects, logs, content plans and half-finished ideas all live here. Local-first and offline capable alternative to Notion.",
                "applicationCategory" => "Productivity / Note-taking Tool"
            ]
        ],
        [
            "@type" => "ListItem",
            "position" => 9,
            "name" => "DaVinci Resolve",
            "item" => [
                "@type" => "SoftwareApplication",
                "name" => "DaVinci Resolve",
                "url" => "https://www.blackmagicdesign.com/products/davinciresolve",
                "description" => "Main video editor for Y3DS and Unspecialist. Recommended over any other editing software — the learning curve is real but you'll feel home in a week or so.",
                "applicationCategory" => "Video Editing Software",
                "offers" => [
                    "@type" => "Offer",
                    "price" => "0",
                    "priceCurrency" => "USD"
                ]
            ]
        ]
    ]
];

require_once 'includes/header.php';
?>
<main class="container tech">
    <h1 class="md-title">Tools & Tech I Actually Use</h1>
    <p>A nerd from the Himalayas, led by curiosity and experimentation; not hype cycles. I have created list of
        things I use on regular basis.</p>
    <p>If you feel the FOMO every time a new app, AI tool, frameworks, or gadget drops. Before you make any heavy
        investment, I might have something worth reading.</p>
    <div class="mt tech-wrap">
        <h2>Gears</h2>
        <section>
            <div>
                <img src="/assets/images/MacBook-Air-m4.webp" alt="Macbook Air M4">
            </div>
            <div>
                <h3>MacBook Air m4 - 13"</h3>
                <p>Fanless, light and fast enough for my DaVinci, Figma, Blender works. I'd recommend MacBook Air 15" M5
                    over any pro devices if you want to use for video editing, photography, office works.</p>
            </div>

        </section>
        <section>
            <div>
                <img src="/assets/images/iPhone-15-Pro-Max.webp" alt="iPhone 15 Pro Max">
            </div>
            <div>
                <h3>iPhone 15 Pro Max</h3>
                <p>My goto 48MP camera for anything creative captures. Also it works just perfect for Apple ecosystem to
                    work with.</p>
            </div>

        </section>
        <section>
            <div>
                <img src="/assets/images/AJAZZ-AK980.webp" alt="AJAZZ AK980">
            </div>
            <div>
                <h3>AJAZZ AK980</h3>
                <p>I love mechanical keyboards for the clicking sounds. I use AJAZZ AK980 because I often have to use
                    numpad
                    for blender. This is value for money kind of keyboard and the typing experience is amazing.</p>
            </div>

        </section>
        <section>
            <div>
                <img src="/assets/images/kz-caster-pro.webp" alt="KZ Caster Pro">
            </div>
            <div>
                <h3>KZ Caster Pro</h3>
                <p>I use this IEM for podcast, games and music. I think this is a solid choice for entering into IEM
                    category. KZ
                    Caster Pro have detailed, controlled and satisfying sound quality. I'd recommend mid range IEM over
                    any
                    expensive wireless earbuds, AirPods.</p>
            </div>

        </section>
    </div>
    <div class="mt tech-wrap">
        <h2>Tools of Choice</h2>
        <section>
            <div>
                <img src="/assets/images/blender.webp" alt="Blender">
            </div>
            <div>
                <h3>Blender</h3>
                <p>Blender 2.80 was first time I was convinced to switch to blender. Before that I was switching between
                    C4D, Maya, Max, Keyshot, and ZBrush. I've never looked back since then. Now blender is my primary
                    tool.
                    If
                    you want to start 2D - just start here. Everything else is extra.</p>
            </div>
        </section>
        <section>
            <div>
                <img src="/assets/images/vscode.webp" alt="VSCode">
            </div>
            <div>
                <h3>VS Code</h3>
                <p>The DEFAULT editor. I've tried many others and always come back. Good enough isn't a compromise.</p>
            </div>
        </section>
        <section>
            <div>
                <img src="/assets/images/claude.webp" alt="Claude">
            </div>
            <div>
                <h3>Claude</h3>
                <p>I can say it's my second brain but better than me. I use claude for research, logic, debugging and
                    writting code.</p>
            </div>
        </section>
        <section>
            <div>
                <img src="/assets/images/anytype.webp" alt="Anytype">
            </div>
            <div>
                <h3>Anytype</h3>
                <p>Projects, logs, content plans and half-finished ideas all live here. Local-first and offline capable
                    alternative to Notion.</p>
            </div>
        </section>
        <section>
            <div>
                <img src="/assets/images/davinci-resolve.webp" alt="Davinci Resolve">
            </div>
            <div>
                <h3>DaVinci</h3>
                <p>My main video editor for Y3DS and Unspecialist. If you're learning any other editing software I want
                    you
                    to instently leave that and jump to DaVinci Resolve. The learning curve is real but you'll feel home
                    in
                    a week or so.</p>
            </div>
        </section>
    </div>
</main>
<?php require_once 'includes/footer.php'; ?>