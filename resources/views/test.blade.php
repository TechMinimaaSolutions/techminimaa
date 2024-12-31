<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Form</title>
</head>
<body class="bg-gray-50 m-5 overflow-hidden font-['Poppins']">
    <form id="pardot-form" class="flex flex-wrap justify-between gap-6">
        <!-- First Name -->
        <div class="w-full md:w-[48%]">
            <input type="text" 
                   placeholder="First Name**" 
                   class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700"
                   required>
        </div>

        <!-- Last Name -->
        <div class="w-full md:w-[48%]">
            <input type="text" 
                   placeholder="Last Name**" 
                   class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700"
                   required>
        </div>

        <!-- Job Title -->
        <div class="w-full md:w-[48%]">
            <input type="text" 
                   placeholder="Job Title" 
                   class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700">
        </div>

        <!-- Company -->
        <div class="w-full md:w-[48%]">
            <input type="text" 
                   placeholder="Company" 
                   class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700">
        </div>

        <!-- Email -->
        <div class="w-full md:w-[48%] relative">
            <input type="email" 
                   placeholder="Work Email**" 
                   class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700"
                   required>
            <div class="email-tip hidden absolute mt-2 p-3 bg-white border border-gray-200 rounded-md shadow-lg w-[90%] mx-[5%] text-center text-sm">
                Please use your work email address, so we can get back to you quickly.
            </div>
        </div>

        <!-- Phone -->
        <div class="w-full md:w-[48%]">
            <input type="tel" 
                   placeholder="Phone" 
                   class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700">
        </div>

        <!-- Country -->
        <div class="w-full md:w-[48%]">
            <select class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700 appearance-none bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPjxwb2x5bGluZSBwb2ludHM9IjYgOSAxMiAxNSAxOCA5Ij48L3BvbHlsaW5lPjwvc3ZnPg==')] bg-no-repeat bg-[center_right_1rem]"
                    required>
                <option value="">Country**</option>
                <!-- Add country options -->
            </select>
        </div>

        <!-- State/Province -->
        <div class="w-full md:w-[48%]">
            <select class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700 appearance-none bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9ImN1cnJlbnRDb2xvciIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiPjxwb2x5bGluZSBwb2ludHM9IjYgOSAxMiAxNSAxOCA5Ij48L3BvbHlsaW5lPjwvc3ZnPg==')] bg-no-repeat bg-[center_right_1rem]">
                <option value="">State/Province</option>
                <!-- Add state options -->
            </select>
        </div>

        <!-- Project Details -->
        <div class="w-full">
            <textarea placeholder="Project Details/Inquiry**" 
                      rows="10"
                      class="w-full px-5 py-4 rounded-md border border-gray-200 focus:border-gray-400 outline-none transition-all bg-white text-gray-700 resize-vertical"
                      required></textarea>
        </div>

        <!-- Submit Button -->
        <div class="w-full flex justify-end">
            <button type="submit" 
                    class="bg-[#00e9c2] hover:bg-[#baf7e7] text-gray-800 px-10 py-4 rounded-md transition-colors duration-200 uppercase text-sm font-normal tracking-wider">
                Submit Now
            </button>
        </div>
    </form>

    <!-- Contact Email -->
    <div class="mt-4 flex items-center text-gray-600">
        <span class="mr-2">Or email us at</span>
        <a href="mailto:contact@appnovation.com" class="text-[#00e9c2] hover:underline">
            contact@appnovation.com
        </a>
    </div>

    <script>
        // Email validation
        document.querySelector('input[type="email"]').addEventListener('input', function(e) {
            const personalDomains = ['@gmail', '@hotmail', '@outlook', '@yahoo'];
            const emailTip = this.parentElement.querySelector('.email-tip');
            
            if (personalDomains.some(domain => this.value.includes(domain))) {
                emailTip.classList.remove('hidden');
            } else {
                emailTip.classList.add('hidden');
            }
        });
    </script>
</body>
</html>