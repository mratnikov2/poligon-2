<!DOCTYPE html>
<html lang="ru">
@vite(['resources/css/app.css', 'resources/js/app.ts'])
<head>
    <meta charset="UTF-8" />
    <title>Brands</title>
</head>
<body>

<div class="w-full max-w-[2560px] h-screen bg-blue-400 flex flex-row justify-center items-center">
    <div class="text-[170px] text-white font-bold">
        Brand <br> Consulting
    </div>
</div>
<div class="mt-20 w-full max-w-[2560px] bg-white h-[700px]">
    <div class="w-full max-w-[1280px] mx-auto border-b border-b-black" data-aos="zoom-in">
        <h1 class="text-3xl text-left">
            About CAA Global Brand Consulting
        </h1>
    </div>
    <div class="w-full max-w-[1280px] mx-auto mt-5 flex flex-row">
        <div class="w-1/3" data-aos="fade-left">
            <p class="text-red-700 text-5xl font-bold leading-tight">
                Our approach <br> is centered on <br> what we call <br> The Collective <br> Perspective.
            </p>
        </div>
        <div class="w-2/3" data-aos="fade-right">
            <p class="text-left text-2xl leading-tight mt-2">
                CAA Global Brand Consulting is a strategy-led, full-service marketing agency specializing in sports,
                entertainment, and social impact solutions.<br>
                As a division of CAA, CAA Global Brand Consulting operates at the epicenter of culture. We help our
                world-class brand clients drive relevance through our unparalleled connectivity to entertainment and
                pop culture. We work with clients across every service offering, from planning to execution.
                We bring proactive thinking as we react and adapt to the changing landscape.
            </p>
            <p class="text-left text-2xl leading-tight mt-2">
                We are a strategic partner for brands, helping to solve their biggest challenges. We collaborate to
                create brand solutions that drive culture and amplify the volume of unique and diverse audiences in
                ways that makes consumers feel more entertained, engaged, and empowered.
            </p>
            <p class="text-left text-2xl leading-tight mt-2">
                Our product is our people. Our team of 200+ best-in class executives in New York, Los Angeles,
                Jacksonville, Nashville, Washington, D.C., Dallas, Las Vegas, London, Munich, Beijing, and Singapore
                who collaborate to deliver actionable solutions that help clients innovate, drive growth, and solve
                problems that seem unsolvable. Our global team comes together in a broad, integrated offering: a
                Collective Perspective on the world. We are honored to represent the most prestigious and innovative
                brands in our industry.
            </p>
        </div>
    </div>
</div>
<div class="mt-5 w-full max-w-[2560px] bg-white h-[1600px]">
    <div class="w-full max-w-[1280px] mx-auto border-b border-b-black" data-aos="zoom-in">
        <h1 class="text-3xl text-left mb-2">
            What We Do
        </h1>
    </div>
    <div class="w-full max-w-[1280px] mx-auto mt-5 flex flex-row">
        <div class="w-1/3" data-aos="fade-left">
            <p class="text-red-700 text-[50px] font-bold leading-tight mt-10">
                Our suite of <br> integrated <br> services work <br> together <br> based on <br> bespoke <br> client
                needs.
            </p>
        </div>
        <div id="brand1">
            <what-we-do></what-we-do>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto p-6 bg-white rounded-lg shadow-md border-1 border-black mt-200 mb-10">
    <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
    <p class="mb-6">Want to see how we can help your brand? Get in touch.</p>
    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- First Name -->
        <div>
            <label class="block mb-1 font-medium">First</label>
            <input type="text" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="First name" />
        </div>
        <!-- Last Name -->
        <div>
            <label class="block mb-1 font-medium">Last</label>
            <input type="text" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Last name" />
        </div>
        <!-- Email -->
        <div>
            <label class="block mb-1 font-medium">Email</label>
            <input type="email" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Email address" />
        </div>
        <!-- Phone -->
        <div>
            <label class="block mb-1 font-medium">Phone</label>
            <input type="tel" class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Phone number" />
        </div>
        <!-- Organization -->
        <div>
            <label class="block mb-1 font-medium">Organization</label>
            <input type="text" class="w-full border border-gray-300 rounded px-3 py-2"
                   placeholder="Company or Organization"
            />
        </div>
        <!-- Country -->
        <div>
            <label class="block mb-1 font-medium">Country</label>
            <select class="w-full border border-gray-300 rounded px-3 py-2">
                <option>United States</option>
                <option>Ukraine</option>
                <option>Germany</option>
                <option>Canada</option>
                <option>United Kingdom</option>
                <option>Australia</option>
            </select>
        </div>
        <!-- Additional Information -->
        <div class="md:col-span-2">
            <label class="block mb-1 font-medium">Additional Information</label>
            <textarea class="w-full border border-gray-300 rounded px-3 py-2" rows="4"
                      placeholder="Type your message here..."
            >
            </textarea>
        </div>
        <!-- Submit Button -->
        <div class="md:col-span-2 flex justify-end">
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded">
                Submit
            </button>
        </div>
    </form>
</div>

</body>
</html>
