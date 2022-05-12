<x-finance-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('บันทึกรายรับ') }}
        </h2>
    </x-slot>

    <x-breadcrumb :paths="$currentPath" />

    <div class="py-4">
        <div class="ml-4 mx-auto px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <div class="p-6 w-1/2 bg-white border-b border-gray-200">
                        <form id="frm_create" method="POST">
                            @csrf
                            <div class="grid xl:grid-cols-1 xl:gap-6">
                                <div class="grid xl:grid-cols-3 xl:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input datepicker type="date" name="revenue_indate" id="revenue_indate"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " value="2022-05-10" required="">
                                        <label for="revenue_indate"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                            วันที่</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="text" name="revenue_billno" id="revenue_billno"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required="">
                                        <label for="revenue_billno"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                            เล่มที่</label>
                                    </div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="text" name="revenue_billno" id="revenue_billno"
                                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                            placeholder=" " required="">
                                        <label for="revenue_billno"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                            เลขที่</label>
                                    </div>
                                </div>

                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="text" name="revenue_item" id="revenue_item"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required="">
                                    <label for="revenue_item"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        รายการ</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <textarea id="revenue_detail" name="revenue_detail" rows="4"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required=""></textarea>
                                    <label for="revenue_detail"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        รายละเอียด</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input datepicker type="date" name="revenue_indate" id="revenue_indate"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " value="2022-05-10" required="">
                                    <label for="revenue_indate"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        วันที่รับเงิน</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <select
                                        class="form-select appearance-none block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        aria-label="Default select example" required="">
                                        <option selected>เลือกประเภทการรับ</option>
                                        <option value="1">เงินสด</option>
                                        <option value="2">เงินโอน</option>
                                        <option value="3">เงินที่ได้รับจากกองทุน</option>
                                    </select>
                                    <label for="revenue_indate"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        ประเภทการรับ</label>
                                </div>
                                <div class="relative z-0 w-full mb-6 group">
                                    <input type="number" min="0" name="revenue_money" id="revenue_money"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        placeholder=" " required="">
                                    <label for="revenue_money"
                                        class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        จำนวนเงิน</label>
                                </div>

                            </div>
                            <div class="text-center">
                                <button type="submit" id="save-data"
                                    class="w-64 rounded-full text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">บันทึกรายรับ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-finance-layout>
<script type="text/javascript">
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    // $("#save-data").click(function(e) {
    //     e.preventDefault();
    //     $.ajax({
    //         type: 'POST',
    //         url: "{{ route('finance.revenue.store') }}",
    //         data: $("#frm_create").serializeArray(),
    //         success: function(data) {
    //             console.log(data);
    //         }
    //     });

    // });
</script>
