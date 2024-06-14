<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto p-8">
        <div class="bg-white p-6 rounded-lg shadow-lg max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold mb-6 text-gray-800 text-center">Contact Information</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Office Address</h3>
                    <p class="text-gray-600">
                        123 Main Street<br>
                        Suite 500<br>
                        Jakarta, Indonesia<br>
                        12345
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Phone</h3>
                    <p class="text-gray-600">
                        Office: (021) 123-4567<br>
                        Support: (021) 987-6543
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Email</h3>
                    <p class="text-gray-600">
                        General: info@example.com<br>
                        Support: support@example.com
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">Business Hours</h3>
                    <p class="text-gray-600">
                        Monday - Friday: 9:00 AM - 6:00 PM<br>
                        Saturday: 10:00 AM - 4:00 PM<br>
                        Sunday: Closed
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>