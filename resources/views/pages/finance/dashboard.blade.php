<x-finance-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-breadcrumb :paths="$currentPath" />

    <div class="py-4">
        <div class="ml-4 mx-auto px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 min-h-screen">
                    Dashboard
                    <label for="id_label_single">
                        Click this to highlight the single select element

                        <select
                            class="js-example-basic-single  block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            id="id_label_single">
                            <option value="">asdfasdfasdf</option>
                            <option value="">asdfasdfasdf</option>
                            <option value="">asdfasdfasdf</option>
                            <option value="">asdfasdfasdf</option>
                            <option value="">asdfasdfasdf</option>
                            <option value="">asdfasdfasdf</option>
                            <option value="">asdfasdfasdf</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
    </div>
</x-finance-layout>
<script>
    $(".js-example-basic-single").select2({
        theme: "classic"
    });
</script>
