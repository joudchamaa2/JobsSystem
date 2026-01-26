<x-components.layout>

<div class="min-h-screen bg-gray-950 text-white px-8 py-10">

    <!-- Back Button -->
    <a href="" class="inline-block mb-6 px-4 py-2 bg-gray-800 rounded-lg hover:bg-gray-700 transition">
        ← Back to Jobs
    </a>

    <!-- Apply Card -->
    <div class="bg-gray-900 border border-gray-800 rounded-2xl p-8 max-w-3xl mx-auto shadow-lg">
        
        <h2 class="text-3xl font-bold mb-4">Apply for: {{ $job->title }}</h2>

        <p class="text-gray-400 mb-6">
            {{ $job->company_name }} • {{ $job->location }}
        </p>

        <form action="{{ route('SubmitJobApplication', $job) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Full Name -->
            <div>
                <label for="full_name" class="block text-gray-300 mb-1">Full Name</label>
                <input type="text" id="full_name" name="full_name" value="{{ Auth::user()->name }}"
                       class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-gray-300 mb-1">Email</label>
                <input type="email" id="email" name="email" value="{{ Auth::user()->email }}"
                       class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>

            <!-- CV Upload -->
            <div>
                <label for="cv" class="block text-gray-300 mb-1">Upload CV (PDF, DOCX)</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx"
                       class="w-full text-gray-300 bg-gray-800 border border-gray-700 rounded-lg px-4 py-2">
            </div>

            <!-- Cover Letter -->
            <div>
                <label for="cover_letter" class="block text-gray-300 mb-1">Cover Letter</label>
                <textarea id="cover_letter" name="cover_letter" rows="5"
                          class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                          placeholder="Write a brief cover letter..."></textarea>
            </div>

            <!-- Additional Info -->
            <div>
                <label for="additional_info" class="block text-gray-300 mb-1">Additional Information</label>
                <textarea id="additional_info" name="additional_info" rows="3"
                          class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                          placeholder="Any extra info you want to share..."></textarea>
            </div>

            <!-- Submit -->
            <div class="text-right">
                <button type="submit"
                        class="px-6 py-3 bg-indigo-600 rounded-lg hover:bg-indigo-700 transition">
                    Submit Application
                </button>
            </div>
        </form>

        @if(session('success'))
            <p class="text-green-400 mt-4">{{ session('success') }}</p>
        @endif
        @if(session('error'))
            <p class="text-red-400 mt-4">{{ session('error') }}</p>
        @endif

    </div>

</div>

</x-components.layout>
