
                <div class="border border-gray-300 p-6 grid grid-cols-1 gap-6 items-center justify-center bg-white shadow-lg rounded-lg">
                    <form method="post" id="myForm" action="{{ ('save') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                        <div class="grid grid-cols-3 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border rounded bg-gray-300 items-center justify-center p-2 ">
                                <input type="text" placeholder="Enter Title Here..." name="title"
                                       class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                            </div>
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">

                                <input type="text" placeholder="Enter Discreption Here..." name="description"
                                       class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                            </div>
                            <div class="flex border rounded bg-gray-300 items-center p-2 ">

                                <input type="file" name="image"
                                       class="bg-gray-300 max-w-full focus:outline-none text-gray-700"/>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-center"><button class="p-2 border w-1/4 rounded-md bg-gray-800 text-white" type="submit">Add</button></div>
                    </form>
                </div>


