<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elon Musk CV</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-8">
        <header class="text-center mb-8">
            <h1 class="text-4xl font-bold">Elon Musk</h1>
            <p class="text-xl">CEO of SpaceX, Tesla, Inc. and Neuralink</p>
            <p class="mt-2">Email: elon.musk@example.com | Phone: (123) 456-7890</p>
            <p class="mt-2">Location: Hawthorne, CA, USA</p>
        </header>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold border-b-2 pb-2">Experience</h2>
            <div class="mt-4">
                <h3 class="font-semibold">CEO, SpaceX</h3>
                <p>2002 - Present</p>
                <p>Leading the charge in space exploration and technology.</p>
            </div>
            <div class="mt-4">
                <h3 class="font-semibold">CEO, Tesla, Inc.</h3>
                <p>2004 - Present</p>
                <p>Driving innovation in electric vehicles and renewable energy.</p>
            </div>
            <div class="mt-4">
                <h3 class="font-semibold">Founder, The Boring Company</h3>
                <p>2016 - Present</p>
                <p>Working on tunnel construction and infrastructure development.</p>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold border-b-2 pb-2">Education</h2>
            <div class="mt-4">
                <h3 class="font-semibold">University of Pennsylvania</h3>
                <p>B.S. in Physics and B.S. in Economics</p>
                <p>1992 - 1997</p>
            </div>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold border-b-2 pb-2">Skills</h2>
            <ul class="list-disc ml-5 mt-4">
                <li>Leadership & Management</li>
                <li>Innovative Problem Solving</li>
                <li>Strategic Planning</li>
                <li>Engineering & Technology</li>
                <li>Public Speaking</li>
            </ul>
        </section>

        <section class="mb-8">
            <h2 class="text-2xl font-semibold border-b-2 pb-2">Awards & Honors</h2>
            <ul class="list-disc ml-5 mt-4">
                <li>Time Magazine Person of the Year (2021)</li>
                <li>Forbes' Most Powerful People (2021)</li>
                <li>Honorary Doctorate from the University of Southern California (2014)</li>
            </ul>
        </section>
        <div class="bg-blue-500 w-24 h-50 mt-5 text-center cursor-pointer text-white rounded-md hover:bg-blue-400">
            <a href="{{ url('/cv-download') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Download
            </a>
        </div>
        <footer class="text-center mt-8">
            <p class="text-sm">This CV is for demonstration purposes only. © 2024 Elon Musk.</p>
        </footer>
    </div>

</body>
</html>
