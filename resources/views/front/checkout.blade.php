<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('output.css')}}" rel="stylesheet" />
    <link href="{{asset('main.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
<body>
    <main class="max-w-[640px] mx-auto min-h-screen flex flex-col relative has-[#Bottom-nav]:pb-[144px]">
        <div id="Top-navbar" class="flex items-center justify-between px-5 pt-5">
            <a href="booking.html">
                <div class="size-[44px] flex shrink-0">
                    <img src="{{asset('assets/images/icons/arrow-left.svg')}}" alt="icon" />
                </div>
            </a>
            <p class="text-lg leading-[27px] font-semibold">Checkout</p>
            <button class="size-[44px] flex shrink-0">
                <img src="{{asset('assets/images/icons/more.svg')}}" alt="icon" />
            </button>
        </div>

        <!-- Display Errors -->
        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-400 text-red-700 p-4 my-5 rounded-md">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" enctype="multipart/form-data" action="{{route('front.checkout.store')}}" class="flex flex-col gap-[30px] mt-[30px]">
            @csrf
            <!-- Product Section -->
            <section id="Product-name" class="flex flex-col gap-3 px-5">
                <h2 class="font-semibold text-lg leading-[27px]">Product</h2>
                <div class="flex items-center gap-[14px]">
                    <div class="w-20 h-20 flex shrink-0 rounded-2xl overflow-hidden bg-[#F6F6F6] items-center">
                        <div class="w-full h-[50px] flex shrink-0 justify-center">
                            <img src="{{Storage::url($product->thumbnail)}}" class="h-full w-full object-contain" alt="thumbnail">
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-2">
                        <p class="font-bold text-lg leading-[27px]">{{$product->name}}</p>
                        <div class="flex items-center gap-[14px]">
                            <div class="flex items-center w-fit gap-1">
                                <p class="font-semibold text-sm leading-[21px] text-[#6E6E70]">Original 100%</p>
                                <div class="w-5 h-5 flex shrink-0">
                                    <img src="{{asset('assets/images/icons/verify.svg')}}" alt="verify">
                                </div>
                            </div>
                            <div class="flex items-center w-fit gap-1">
                                <p class="font-semibold text-sm leading-[21px] text-[#6E6E70]">Insurance</p>
                                <div class="w-5 h-5 flex shrink-0">
                                    <img src="{{asset('assets/images/icons/verify.svg')}}" alt="verify">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Customer Information Section -->
            <hr class="border-[#EDEEF0] mx-5">
            <div id="Customer-info" class="flex flex-col px-5 gap-5">
                <h2 class="font-semibold text-lg leading-[27px]">Customer Information</h2>
                <div class="flex flex-col gap-2">
                    <label for="name" class="font-semibold">Full Name</label>
                    <div class="group w-full rounded-2xl border border-[#EDEEF0] p-[18px_14px] flex items-center gap-3 relative transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FCCF2F]">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="{{asset('assets/images/icons/user.svg')}}" alt="icon">
                        </div>
                        <input type="text" name="name" id="name" class="appearance-none outline-none rounded-2xl w-full placeholder:font-normal placeholder:text-black font-semibold text-sm leading-[24px]" placeholder="Write your full name" value="{{ old('name') }}" required>
                    </div>
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="phone_number" class="font-semibold">Phone Number</label>
                    <div class="group w-full rounded-2xl border border-[#EDEEF0] p-[18px_14px] flex items-center gap-3 relative transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FCCF2F]">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="{{asset('assets/images/icons/call.svg')}}" alt="icon">
                        </div>
                        <input type="tel" name="phone_number" id="phone_number" class="appearance-none outline-none rounded-2xl w-full placeholder:font-normal placeholder:text-black font-semibold text-sm leading-[24px]" placeholder="Write your phone number" value="{{ old('phone_number') }}" required>
                    </div>
                    @error('phone_number')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <hr class="border-[#EDEEF0] mx-5">
            <!-- Payment Details Section -->
            <div id="Payment-details" class="flex flex-col px-5 gap-3">
                <h2 class="font-semibold text-lg leading-[27px]">Payment Details</h2>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <p>Sub total</p>
                        <p class="font-semibold">{{number_format($subTotal, 0, ',', '.')}}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p>PPN 11%</p>
                        <p class="font-semibold">{{number_format($totalPpn, 0, ',', '.')}}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p>Insurance</p>
                        <p class="font-semibold">{{number_format($insurance, 0, ',', '.')}}</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <p>Grand total</p>
                        <p class="font-bold text-xl leading-[30px] underline">{{number_format($grandTotal, 0, ',', '.')}}</p>
                    </div>
                </div>
            </div>
            <!-- ... Section Code ... -->
            <hr class="border-[#EDEEF0] mx-5">
            <div id="Confirm-Payment" class="flex flex-col px-5 gap-5">
                <h2 class="font-semibold text-lg leading-[27px]">Confirm Payment</h2>
                <div class="flex flex-col gap-2">
                    <label for="Proof" class="font-semibold">Upload Proof</label>
                    <div class="group w-full rounded-2xl border border-[#EDEEF0] p-[18px_14px] flex items-center gap-3 relative transition-all duration-300 focus-within:ring-2 focus-within:ring-[#FCCF2F]">
                        <div class="w-6 h-6 flex shrink-0">
                            <img src="{{asset('assets/images/icons/note-add.svg')}}" alt="icon">
                        </div>
                        <button type="button" id="Upload-btn" class="appearance-none outline-none w-full text-left" onclick="document.getElementById('Proof').click()">
                        Add an attachment
                        </button>
                        <input type="file" name="proof" id="Proof" class="absolute -z-10 opacity-0" required>
                    </div>
                    @error('proof')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div id="Bottom-nav" class="fixed bottom-0 max-w-[640px] w-full mx-auto border-t border-[#F1F1F1] overflow-hidden z-10">
                <div class="bg-white/50 backdrop-blur-sm absolute w-full h-full"></div>
                <div class="p-5 relative z-10">
                    <button id="confirm-payment" type="submit" class="rounded-full p-[12px_24px] bg-[#FCCF2F] font-bold w-full">Confirm Payment</button>
                </div>
            </div>
        </form>
    </main>
    <script src="{{asset('customjs/checkout.js')}}"></script>
</body>
</html>
