<x-components.layout>

<div class="min-h-screen bg-gray-950 text-white flex items-center justify-center px-4">

    <div class="max-w-4xl w-full grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- FREE PLAN -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 text-center">
            <h3 class="text-xl font-bold mb-2">Free</h3>
            <p class="text-gray-400 mb-6">Basic access</p>

            <div class="text-4xl font-bold mb-6">$0</div>

            <ul class="space-y-3 text-gray-400 mb-8 text-sm">
                <li>✔ View jobs</li>
                <li>✔ Apply to jobs</li>
                <li>✖ Post jobs</li>
                <li>✖ Featured profile</li>
            </ul>

            <button disabled
                class="w-full py-3 bg-gray-800 text-gray-500 rounded-lg cursor-not-allowed">
                Current Plan
            </button>
        </div>

        <!-- PREMIUM PLAN -->
        <div class="bg-indigo-600 rounded-2xl p-8 text-center shadow-xl scale-105">
            <h3 class="text-xl font-bold mb-2">Premium</h3>
            <p class="text-indigo-200 mb-6">Best for professionals</p>

            <div class="text-4xl font-bold mb-6">$9<span class="text-lg">/mo</span></div>

            <ul class="space-y-3 text-indigo-100 mb-8 text-sm">
                <li>✔ View all jobs</li>
                <li>✔ Apply unlimited</li>
                <li>✔ Post jobs</li>
                <li>✔ Featured profile</li>
                <li>✔ Priority support</li>
            </ul>

            <a href="{{ route('SubscribeSuccessPage') }}"
               class="block w-full py-3 bg-white text-indigo-600 font-semibold rounded-lg hover:bg-gray-100 transition">
                Subscribe Now
            </a>
        </div>

        <!-- ENTERPRISE PLAN -->
        <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 text-center">
            <h3 class="text-xl font-bold mb-2">Enterprise</h3>
            <p class="text-gray-400 mb-6">For companies</p>

            <div class="text-4xl font-bold mb-6">$29<span class="text-lg">/mo</span></div>

            <ul class="space-y-3 text-gray-400 mb-8 text-sm">
                <li>✔ Unlimited job posts</li>
                <li>✔ Company branding</li>
                <li>✔ Featured jobs</li>
                <li>✔ Dedicated support</li>
            </ul>

            <a href="{{route('SubscribeSuccessPage')}}"
               class="block w-full py-3 bg-gray-800 text-white rounded-lg hover:bg-gray-700 transition">
                Contact Sales
            </a>
        </div>

    </div>

</div>

</x-components.layout>
