<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources - ALANA Chat</title>
    <link rel="stylesheet" href="assets/css/resourceStyles.css">
</head>
<body>
<div class="background"></div>

<div class="content">
    <!-- Header -->
    <?php include 'header.php'; ?>

    <main>
        <section class="resource-section">
            <!-- Fixed Title and Search Bar -->
            <div class="resource-header">
                <h1>Resources</h1>
                <input type="text" id="searchInput" placeholder="Search resources..." onkeyup="searchResources()">
            </div>

            <div id="resourceContainer">
                <div class="resource">
                    <h2>A-Space</h2>
                    <p>A-Space supports all students on the asexual and aromantic spectrums, including asexual, aromantic, and demi-sexual students on campus.</p>
                    <a href="https://campusgroups.rit.edu/aspace/home/" target="_blank">LEARN MORE</a>
                </div>

                <div class="resource">
                    <h2>AALANA Faculty Advisory Council</h2>
                    <p>AALANA Faculty Advisory Council (AFAC) serves as an advisory council to the Provost in support of the career success of African American, Latino American, and Native American faculty at RIT.</p>
                    <a href="https://www.rit.edu/diversity/aalana-faculty-advisory-council" target="_blank">LEARN MORE</a>
                </div>

                <div class="resource">
                    <h2>AdvanceRIT</h2>
                    <p>A long-term, multi-faceted program designed to enable all faculty at RIT, particularly women, to contribute their full potential, increase their representation and retention, and advance their careers. AdvanceRIT started as an Institutional Transformation grant from the National Science Foundation and was institutionalized in 2019. The program implements interventions to influence and transform the workplace culture at RIT at a structural level and promotes inclusion of all subpopulations and minority groups, including Deaf and Hard-of-Hearing faculty, faculty of color, and faculty of the LGBTQIA+ community.</p>
                    <a href="https://www.rit.edu/diversity/advance-rit" target="_blank">LEARN MORE</a>
                </div>

                <div class="resource">
                    <h2>AALANA Collegiate Association</h2>
                    <p>Lorem ipsum dolor sit amet consectetur...</p>
                    <a href="https://google.com" target="_blank">LEARN MORE</a>
                </div>

                <div class="resource">
                    <h2>Caribbean Student Association (CSA)</h2>
                    <p>Provides a second home to students of Caribbean descent, allowing them to freely express their culture and relate to other Caribbean students in a safe space. The club also educates the RIT community about Caribbean culture, customs, and attributes.</p>
                    <p>Follow them on Instagram @rit_csa!</p>
                    <a href="https://campusgroups.rit.edu/login_only?redirect=https%3a%2f%2fcampusgroups.rit.edu%2ffeeds%3ftype%3dclub%26type_id%3d16079%26tab%3dabout" target="_blank">LEARN MORE</a>
                </div>

                <div class="resource">
                    <h2>DDI Celebration of Excellence</h2>
                    <p>A Division-wide end-of-year event that celebrates the accomplishments of Division of Diversity and Inclusion students, collaborators, partners, and supporters. The event also presents awards recognizing contributions of students, faculty, staff, and alumni leaders to clubs, organizations, and departments.</p>
                    <a href="https://google.com" target="_blank">LEARN MORE</a>
                </div>

                <div class="resource">
                    <h2>Destler/Johnson Rochester City Scholars Program</h2>
                    <p>Designed for exemplary Rochester City School District students who are selected based on their academic achievements, leadership potential, and desire to make a difference in the RIT and surrounding community.</p>
                    <a href="https://www.rit.edu/diversity/destlerjohnson-rochester-city-scholars" target="_blank">LEARN MORE</a>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <div id="footer"></div>
    <script>
        fetch('footer.html')
            .then(response => response.text())
            .then(data => document.getElementById('footer').innerHTML = data);
    </script>
</div>

<script>
    function searchResources() {
        let input = document.getElementById("searchInput").value.toLowerCase();
        let resources = document.querySelectorAll(".resource");

        resources.forEach(resource => {
            let title = resource.querySelector("h2").innerText.toLowerCase();
            let description = resource.querySelector("p").innerText.toLowerCase();

            if (title.includes(input) || description.includes(input)) {
                resource.style.display = "block";
            } else {
                resource.style.display = "none";
            }
        });
    }
</script>

</body>
</html>
