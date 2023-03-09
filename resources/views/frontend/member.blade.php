<x-frontend.app title="Members">

    <!-- members page -->
    <div class="mt-32 flex w-full place-items-center justify-end p-10">
        <div class="dropdown flex w-32"></div>
        <h1 class="primary text-3xl font-bold">Year:</h1>

        <div class="dropdown-menu p-3">
            <select>
                <option value=""><button>2022</button></option>
                <br />
                <option value=""><button>2021</button></option>
                <br />
                <option value=""><button>2020</button></option>
                <br />
                <option value=""><button>2019</button></option>
                <br />
                <option value=""><button>2018</button></option>
                <br />
            </select>
        </div>
    </div>

    <div class=" mt-16">
        <div class="w-full place-items-center">
            <h1 class="primary Poppins text-center font-semibold mb:text-3xl sm:text-3xl md:text-4xl lg:text-5xl">
                Executive Members
            </h1>
        </div>
        <div class="w-full place-items-center">
            <h1 class="Poppins text-center font-normal text-gray-700 lg:text-xl">
                The Backbone of the club
            </h1>
        </div>
    </div>

    <!-- executive member links start -->
    <div class="flex w-full justify-center">
        <div class="flex w-64 flex-col items-center rounded-3xl p-3">
            <div class="circle items-end pb-7 pt-7">
                <div class="outercircle mb:h-32 mb:w-32 sm:h-36 sm:w-36 md:h-40 md:w-40 lg:h-48 lg:w-48">
                    <div class="innercircle mb:h-28 mb:w-28 sm:h-32 sm:w-32 md:h-36 md:w-36 lg:h-44 lg:w-44">
                        <img src="{{ asset('image/ellipse3.jpg') }}" alt="image" />
                    </div>
                </div>
            </div>

            <div class="w-full place-items-center">
                <h1 class="primary Poppins text-center font-semibold sm:text-2xl lg:text-3xl">
                    Prakriti Shrestha
                </h1>
            </div>
            <div class="w-full place-items-center">
                <h1 class="primary Poppins text-center font-normal sm:text-lg lg:text-xl">
                    President
                </h1>
            </div>
            <div class="primary mx-auto flex w-[40%] justify-around">
                <a href="#"><i class="ri-facebook-circle-fill ri-2x"></i></a>
                <a href="#"><i class="ri-instagram-line ri-2x"></i></a>
                <a href="#"><i class="ri-linkedin-box-fill ri-2x"></i></a>
            </div>
        </div>
    </div>
    <!-- executive links end -->

    <div class="flex justify-center">
        <div class="executive grid-row-3 grid pl-0 mb:gap-4 sm:pl-16 lg:gap-2">
            <!-- row 1 start -->
            <div class="grid place-items-center gap-2 mb:grid-cols-2 mb:gap-3 sm:grid-cols-2 lg:grid-cols-4">
                <!--columns1 -->
                @foreach($executiveMembers as $executiveMember)

                <div class="flex w-52 flex-col items-center rounded-3xl p-3">
                    <div class="circle items-end pb-5">
                        <div class="outercircle mb:h-28 mb:w-28 sm:h-32 sm:w-32 md:h-36 md:w-36 lg:h-40 lg:w-40">
                            <div
                                class="innercircle circle-in mb:h-28 mb:w-28 sm:h-28 sm:w-28 md:h-32 md:w-32 lg:h-36 lg:w-36">
                                <img src="{{ asset('/members/' . $executiveMember->image) }}" alt="{{ asset('storage/members/' . $executiveMember->image) }}">

                            </div>
                        </div>
                    </div>

                    <div class="w-full place-items-center">
                        <h1 class="primary Poppins text-center text-lg font-semibold">
                            {{$executiveMember->name}}
                        </h1>
                    </div>
                    <div class="w-full place-items-center">
                        <h1 class="primary Poppins text-center text-sm font-normal">
                            {{$executiveMember->designation}}
                        </h1>
                    </div>
                    <div class="primary mx-auto flex w-[40%] justify-around">
                        <a href="{{ $executiveMember->facebook }}"><i class="ri-facebook-circle-fill ri-2x"></i></a>
                        <a href="{{ $executiveMember->instagram }}"><i class="ri-instagram-line ri-2x"></i></a>
                        <a href="{{ $executiveMember->linkedin }}"><i class="ri-linkedin-box-fill ri-2x"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- general members start -->
    <div class="mt-20 mb-20">
        <div class="w-full place-items-center">
            <h1 class="primary Poppins text-center font-semibold mb:text-3xl sm:text-3xl md:text-4xl lg:text-5xl">
                General Members
            </h1>
        </div>
        <div class="w-full place-items-center">
            <h1 class="Poppins text-center font-normal text-gray-700 lg:text-xl">
                The workforce of the club
            </h1>
        </div>
    </div>
    <!--swiper-->
    
    <div class="w-full">
        <div class="mx-auto h-196 w-11/12 snap-y snap-mandatory overflow-scroll">
            <div class="mx-auto flex w-11/12 snap-start items-center justify-center">
                <div class="grid w-full place-items-center gap-6 mb:grid-cols-2 mb:gap-3 sm:grid-cols-2 lg:grid-cols-4">
                    <!--columns1 -->
                    @foreach($generalMembers as $generalMember)
                    <div class="flex w-52 flex-col items-center rounded-3xl p-3">
                        <div class="circle items-end pb-5">
                            <div class="outercircle mb:h-28 mb:w-28 sm:h-32 sm:w-32 md:h-36 md:w-36 lg:h-40 lg:w-40">
                                <div
                                    class="innercircle circle-in mb:h-24 mb:w-24 sm:h-28 sm:w-28 md:h-32 md:w-32 lg:h-36 lg:w-36">
                                    <img src="{{ $generalMember->imageUrl() }}" alt="{{ $generalMember->name }}">
                                </div>
                            </div>
                        </div>

                        <div class="w-full place-items-center">
                            <h1 class="primary Poppins text-center text-lg font-semibold">
                                {{$generalMember->name}}
                            </h1>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-frontend.app>
