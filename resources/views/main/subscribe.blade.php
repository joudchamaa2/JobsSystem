<x-components.layout>

<div class="min-h-screen bg-gray-950 text-white flex items-center justify-center px-4 py-10">

    <div class="max-w-lg w-full bg-gray-900 border border-gray-800 rounded-2xl p-8 space-y-6">

        <!-- Title -->
        <h1 class="text-3xl font-bold text-center">
            Subscribe to Premium
        </h1>

        <p class="text-center text-gray-400">
            Fill in your information to activate your subscription.
        </p>

        <!-- Subscription Form -->
        <form action="{{route('SubmitPreniumSubscription')}}" method="POST" class="space-y-4">
            @csrf

            <!-- Full Name -->
            <div>
                <label for="name" class="block text-gray-300 mb-1">Full Name</label>
                <input type="text" name="name" id="name" required
                       class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                       value="{{ Auth::user()->name }}">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-300 mb-1">Email</label>
                <input type="email" name="email" id="email" required
                       class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                       value="{{ Auth::user()->email }}">
            </div>

            <!-- Payment Info -->
            <div>
                <label for="payment_method" class="block text-gray-300 mb-1">Payment Info</label>
                <input type="text" name="payment_method" id="payment_method" required
                       class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                       placeholder="Card Number / Dummy Info">
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit"
                        class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition">
                    Subscribe Now
                </button>
            </div>

        </form>

        <p class="text-center text-gray-500 text-sm mt-4">
            By subscribing, you agree to our terms and conditions.
        </p>

    </div>

</div>

</x-components.layout>
