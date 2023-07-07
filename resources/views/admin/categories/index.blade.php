<x-Admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2 ">
                <a href="{{ route('admin.categories.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Category</a>
            </div>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                category name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>

                        </tr>
                    </thead>
                    @forelse ($categories as $categoryItem)
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $categoryItem->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $categoryItem->image }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $categoryItem->description }}
                                </td>
                                <td>
                                    <a href="{{ url('admin/category/' . $categoryItem->id . '/edit') }}"
                                        class="btn btn-success">Edit</a>
                                    <a href="{{ url('admin/category/' . $categoryItem->id . '/delete') }}"
                                        class="btn btn-danger ">Delete</a>
                                </td>
                            </tr>
                        </tbody>

                    @empty
                        <div class="p-6 text-gray-900">
                            No category item found for this category
                        </div>
                    @endforelse
                </table>
            </div>



        </div>

    </div>
</x-Admin-layout>
