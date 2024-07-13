@extends('masterlayout')

@section('title')
    Details |
@endsection

@section('body')
    <div class="flex justify-center items-center py-10">
        <div class="w-[80%] flex flex-col gap-5">
            <a href="/" class="flex gap-2">
                <p>⬅</p><p class="font-bold text-xl">Back to Books</p>
            </a>
            <div class="flex">
                <div class="w-[35%]">
                    <img src="assets/book.jpg" alt="this is book" class="h-[30rem] rounded-md">
                </div>
                <div class="w-[75%]">
                    <div class="flex flex-col gap-3">
                        <h1 class="font-bold text-xl capitalize">DeltaSoft Astrology</h1>
                        <div>
                            <p class="font-xl italic">Suman tiwari</p>
                            <p>
                                4.2 <span>⭐⭐⭐⭐</span> <span>(121 reviews)</span>
                            </p>
                        </div>
                    </div>
                    <div class="mt-3 font-semibold flex flex-col gap-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat sed minus possimus saepe itaque minima suscipit, ad eveniet temporibus nemo rem sunt id quo architecto facilis ducimus nulla reiciendis neque laudantium est sit. Saepe, totam officiis? Beatae ratione, optio rerum maiores id quis accusantium magni exercitationem aliquam corrupti adipisci aliquid. Veritatis quod enim nobis quam reiciendis corrupti, sapiente repudiandae qui ullam debitis assumenda, ipsum, ad eligendi natus ipsa in tempore.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius repellat ut accusantium inventore expedita pariatur voluptates voluptas quaerat iusto possimus saepe animi, quasi, iure sunt aliquam officia. Iusto quod iste accusantium consequuntur, dolores quisquam recusandae aspernatur excepturi quibusdam asperiores libero.</p>
                    </div>
                    <hr class="mt-10 border-black"/>
                    <div class="mt-3">
                        <h1 class="font-semibold text-lg">Readers Also Enjoyed</h1>
                        <div class="my-5 flex justify-between">

                            <div class="rounded-md border overflow-hidden inline-block bg-gray-100 shadow-sm hover:scale-105 transition-all cursor-pointer shadow-black">
                                <a href="/details">
                                    <img src="assets/book.jpg" alt="this is book image" class="w-60 h-60">
                                    <div class="p-2">
                                        <h1 class="text-lg">Faizan Book</h1>
                                        <p class="italic">The Alam World</p>
                                        <p>
                                            4.2 <span>⭐⭐⭐⭐</span> <span>(121 reviews)</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="rounded-md border overflow-hidden inline-block bg-gray-100 shadow-sm hover:scale-105 transition-all cursor-pointer shadow-black">
                                <a href="/details">
                                    <img src="assets/book.jpg" alt="this is book image" class="w-60 h-60">
                                    <div class="p-2">
                                        <h1 class="text-lg">Faizan Book</h1>
                                        <p class="italic">The Alam World</p>
                                        <p>
                                            4.2 <span>⭐⭐⭐⭐</span> <span>(121 reviews)</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="rounded-md border overflow-hidden inline-block bg-gray-100 shadow-sm hover:scale-105 transition-all cursor-pointer shadow-black">
                                <a href="/details">
                                    <img src="assets/book.jpg" alt="this is book image" class="w-60 h-60">
                                    <div class="p-2">
                                        <h1 class="text-lg">Faizan Book</h1>
                                        <p class="italic">The Alam World</p>
                                        <p>
                                            4.2 <span>⭐⭐⭐⭐</span> <span>(121 reviews)</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>


                    <div>
                        <div class="flex flex-col justify-end">
                            <button class="bg-violet-500 px-5 py-2 self-end text-white rounded-md hover:bg-violet-600 transition-all" id="myBtn">Add Review</button>


                            {{-- pop up ka code idher hai --}}

                            <div id="myModal" class="popup">
                                <div class="popup-content">
                                    <div class="">
                                        <p class="flex justify-between items-center">
                                            <p class="close">&times;</p>
                                            <p>Add Review For DeltaSoft Astrology</p>
                                        </p>
                                        <hr class="border-black mt-3" />
                                    </div>
                                    <div class="mt-5 flex flex-col gap-5">
                                        <label for="review" class="flex flex-col gap-2">
                                            <p>Review</p>
                                            <input class="p-2 rounded-md border w-full border-black" type="text" name="review" id="review" placeholder="Enter Your Review Here">
                                        </label>
                                        <label for="rating" class="flex flex-col gap-2">
                                            <p>Rating</p>
                                            {{-- <input class="p-2 rounded-md border w-full border-black" type="text" name="rating" id="rating" placeholder="Enter Your Review Here"> --}}
                                            <select name="rating" id="rating" class="p-2 rounded-md border w-full border-black">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </label>
                                        <div class="flex justify-end gap-10">
                                            <button class="px-5 py-2 rounded-md text-white bg-violet-600">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>

                                <div class="my-7 flex flex-col gap-5 shadow-md shadow-black bg-gray-100 p-3 rounded-md">
                                    <div class="flex justify-between">
                                        <p> ⭐⭐⭐⭐</p>
                                        <p>6 April, 2023</p>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolorem harum enim, quisquam officiis sint molestias voluptatum odio, laboriosam, voluptate modi eum. Magni praesentium suscipit soluta exercitationem, maxime deleniti? Iusto ex doloribus tempora quaerat rem suscipit, doloremque quo qui. Omnis vel animi, totam laudantium sapiente laboriosam eum maxime. Provident, itaque?</p>
                                    </div>
                                </div>
                                <div class="my-7 flex flex-col gap-5 shadow-md shadow-black bg-gray-100 p-3 rounded-md">
                                    <div class="flex justify-between">
                                        <p> ⭐⭐⭐⭐</p>
                                        <p>6 April, 2023</p>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolorem harum enim, quisquam officiis sint molestias voluptatum odio, laboriosam, voluptate modi eum. Magni praesentium suscipit soluta exercitationem, maxime deleniti? Iusto ex doloribus tempora quaerat rem suscipit, doloremque quo qui. Omnis vel animi, totam laudantium sapiente laboriosam eum maxime. Provident, itaque?</p>
                                    </div>
                                </div>
                                <div class="my-7 flex flex-col gap-5 shadow-md shadow-black bg-gray-100 p-3 rounded-md">
                                    <div class="flex justify-between">
                                        <p> ⭐⭐⭐⭐</p>
                                        <p>6 April, 2023</p>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolorem harum enim, quisquam officiis sint molestias voluptatum odio, laboriosam, voluptate modi eum. Magni praesentium suscipit soluta exercitationem, maxime deleniti? Iusto ex doloribus tempora quaerat rem suscipit, doloremque quo qui. Omnis vel animi, totam laudantium sapiente laboriosam eum maxime. Provident, itaque?</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection