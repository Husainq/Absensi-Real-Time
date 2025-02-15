<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Kelola Akun Karyawan
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-md sm:rounded-lg p-6">
                <div class="flex justify-between mb-4">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg">
                        + AKUN KARYAWAN
                    </button>
                    <div class="flex gap-1 px-2 border rounded-lg dark:bg-gray-700 dark:text-white items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search">
                            <circle cx="11" cy="11" r="8" />
                            <path d="m21 21-4.3-4.3" />
                        </svg>
                        <input type="text" placeholder="Search."
                            class="border-none focus:outline-none focus:ring-0">
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse border border-gray-300 dark:border-gray-700 rounded-lg">
                        <thead class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
                            <tr>
                                <th class="border px-4 py-2">No</th>
                                <th class="border px-4 py-2">Nama Karyawan</th>
                                <th class="border px-4 py-2">Golongan</th>
                                <th class="border px-4 py-2">Username</th>
                                <th class="border px-4 py-2">Password</th>
                                <th class="border px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-800 dark:text-gray-200">
                            @forelse($akun as $index => $akuns)
                            <tr class="hover:bg-gray-200 dark:hover:bg-gray-700 text-center">
                                <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                                <td class="border px-4 py-2">{{ $akuns->karyawan->nama ?? '-' }}</td>
                                <td class="border px-4 py-2">{{ $akuns->karyawan->golongan ?? '-' }}</td>
                                <td class="border px-4 py-2">{{ $akuns->username }}</td>
                                <td class="border px-4 py-2">******</td>
                                <td class="border px-4 py-2 text-center">
                                    <button class="bg-gray-200 hover:bg-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 px-2 py-1 rounded-lg">
                                        ✏️
                                    </button>
                                    <button class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded-lg">
                                        🗑️
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="border px-4 py-2 text-center">Tidak ada data</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-4">
                    <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-lg">
                        ⬅️
                    </button>
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg mx-1">1</button>
                    <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-lg">
                        2
                    </button>
                    <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-lg">
                        3
                    </button>
                    <button class="px-4 py-2 bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 rounded-lg">
                        ➡️
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>