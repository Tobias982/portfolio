<?php
// --- DATA (Zde si jednoduše upravíš obsah) ---
$name = "Jan Novák";
$role = "Backend & Web Developer";
$hero_text = "Jsem student IT se zaměřením na vývoj softwaru. Baví mě automatizace, Linux a řešení složitých problémů.";
$email = "email@student.cz";

// Dovednosti pro Progress Bary
$skills = [
    ["name" => "JavaScript (ES6+)", "percent" => 85],
    ["name" => "PHP / Laravel", "percent" => 75],
    ["name" => "React", "percent" => 60],
    ["name" => "SQL / Databáze", "percent" => 80],
    ["name" => "Python", "percent" => 90],
    ["name" => "Git & GitHub", "percent" => 95]
];

// Projekty
$projects = [
    [
        "title" => "E-shop API",
        "desc" => "Backend pro internetový obchod. Obsahuje autentizaci uživatelů (JWT), košík a správu objednávek.",
        "tags" => ["Node.js", "Express", "MongoDB"],
        "links" => ["github" => "#", "demo" => "#"]
    ],
    [
        "title" => "Python Web Scraper",
        "desc" => "Automatizovaný skript, který stahuje data o cenách grafických karet, analyzuje trendy a ukládá je do Excelu.",
        "tags" => ["Python", "Selenium", "Pandas"],
        "links" => ["github" => "#"]
    ],
    [
        "title" => "Osobní Portfolio",
        "desc" => "Tato webová stránka. Navržena s důrazem na čistý kód, responzivitu a moderní Dark Mode design.",
        "tags" => ["PHP", "CSS3", "JavaScript"],
        "links" => ["github" => "#", "demo" => "#"]
    ]
];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Portfolio - <?php echo $name; ?></title>
    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <nav>
        <div class="logo">
            <span class="highlight">&lt;</span>Jan<span class="highlight">/&gt;</span>
        </div>
        <ul class="nav-links">
            <li><a href="#home"><span class="code-num">01.</span> Domů</a></li>
            <li><a href="#about"><span class="code-num">02.</span> O mně</a></li>
            <li><a href="#projects"><span class="code-num">03.</span> Projekty</a></li>
            <li><a href="#contact"><span class="code-num">04.</span> Kontakt</a></li>
        </ul>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="container">
            <span class="subtitle fade-in-up">Ahoj, jmenuji se</span>
            <h1 class="fade-in-up delay-1"><?php echo $name; ?>.</h1>
            <h2 class="gray-text fade-in-up delay-2"><?php echo $role; ?></h2>
            <p class="hero-text fade-in-up delay-3">
                <?php echo $hero_text; ?>
            </p>
            <a href="#projects" class="btn fade-in-up delay-4">Zobrazit mé kódy</a>
        </div>
    </section>

    <section id="about" class="container section-padding">
        <h2 class="section-title scroll-reveal"><span class="code-num">02.</span> O mně</h2>
        <div class="about-grid">
            <div class="about-text scroll-reveal">
                <p>Zdravím! Jsem studentem 3. ročníku na SPŠ/VŠ. O programování jsem se začal zajímat v roce 2020. Dnes se věnuji převážně tvorbě webových aplikací a správě serverů.</p>
                <br>
                <p>Hledám příležitost pro stáž, kde bych mohl uplatnit své znalosti.</p>
                
                <div class="skills-container">
                    <h3>Technologie:</h3>
                    <?php foreach($skills as $skill): ?>
                    <div class="skill-box">
                        <div class="skill-info">
                            <span><?php echo $skill['name']; ?></span>
                            <span><?php echo $skill['percent']; ?>%</span>
                        </div>
                        <div class="progress-line" data-percent="<?php echo $skill['percent']; ?>%">
                            <span style="width: 0;"></span> </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="about-img scroll-reveal">
                <div class="img-wrapper">
                    <img src="https://via.placeholder.com/300" alt="Moje fotka">
                    <div class="img-border"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="container section-padding">
        <h2 class="section-title scroll-reveal"><span class="code-num">03.</span> Co jsem vytvořil</h2>
        <div class="projects-grid">
            
            <?php foreach($projects as $project): ?>
            <div class="project-card scroll-reveal">
                <div class="card-header">
                    <i class="far fa-folder folder-icon"></i>
                    <div class="card-links">
                        <?php if(isset($project['links']['github'])): ?>
                            <a href="<?php echo $project['links']['github']; ?>" target="_blank"><i class="fab fa-github"></i></a>
                        <?php endif; ?>
                        <?php if(isset($project['links']['demo'])): ?>
                            <a href="<?php echo $project['links']['demo']; ?>" target="_blank"><i class="fas fa-external-link-alt"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
                <h3><?php echo $project['title']; ?></h3>
                <p><?php echo $project['desc']; ?></p>
                <div class="tech-stack">
                    <?php foreach($project['tags'] as $tag): ?>
                        <span><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </section>

    <section id="contact" class="container section-padding text-center scroll-reveal">
        <span class="subtitle code-num">04. Co dál?</span>
        <h2 class="big-title">Kontaktujte mě</h2>
        <p class="contact-text">
            Momentálně hledám nové příležitosti a stáže. Ať už máte dotaz nebo mě chcete jen pozdravit, moje schránka je otevřená!
        </p>
        <a href="mailto:<?php echo $email; ?>" class="btn big-btn">Napsat Email</a>
    </section>

    <footer>
        <p>Vytvořeno &copy; <?php echo date("Y"); ?> <?php echo $name; ?></p>
        <p class="small">Built with PHP & CSS</p>
    </footer>

    <script>
        // Animace elementů při scrollování (Scroll Reveal)
        const revealElements = document.querySelectorAll('.scroll-reveal');
        
        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            const elementVisible = 150;
            
            revealElements.forEach((el) => {
                const elementTop = el.getBoundingClientRect().top;
                if (elementTop < windowHeight - elementVisible) {
                    el.classList.add('active');
                }
            });
        };
        window.addEventListener('scroll', revealOnScroll);

        // Animace Skill Barů (naplní se až když jsou vidět)
        const progressLines = document.querySelectorAll('.progress-line span');
        const skillsSection = document.querySelector('.skills-container');
        
        const animateSkills = () => {
            const sectionPos = skillsSection.getBoundingClientRect().top;
            const screenPos = window.innerHeight / 1.3;
            
            if(sectionPos < screenPos) {
                progressLines.forEach(line => {
                    // Vezme hodnotu z rodičovského elementu data-percent
                    const width = line.parentElement.getAttribute('data-percent');
                    line.style.width = width;
                });
            }
        };
        window.addEventListener('scroll', animateSkills);
    </script>
</body>
</html>