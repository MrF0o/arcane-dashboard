<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Arcane new subscription</title>

        @vite(['resources/css/app.css', 'resources/js/landing/app.js'])

    </head>
    <body>
        <div class="min-h-screen w-full  flex justify-center subpage-container">
            <div class="rounded-xl p-10 md:w-fit w-full relative z-1 mx-4 md:mx-0 flex flex-col">
                <div class="flex flex-col items-center">
                    <div class="h-16 w-16">
                        <img src="{{ asset('images/logo/logo.svg') }}" alt="">
                    </div>
                    <p class="text-center py-4 text-xl font-medium text-dark">
                        To continue to your account please choose a plan to pay for
                    </p>
                </div>
                <div class="flex gap-10 items-center flex-col md:flex-row justify-self-center flex-1">
                    @foreach($memberships as $i => $m)
                        <div class="overflow-hidden min-h-52 h-52 border-dark/80 shadow rounded-lg p-3 bg-white flex flex-col md:min-w-52 w-[20rem]">
                            <div class="flex items-center justify-between">
                                <h4 class="py-2 text-lg font-bold text-orange-300 tracking-wide drop-shadow-sm">{{ $m->title }}</h4>
                                <div class="flex flex-nowrap items-center">
                                    <h6 class="font-medium ">{{ $m->price }}TND</h6>
                                    <div class="text-sm">/mois</div>
                                </div>
                            </div>
                            <div class="flex-1" >
                                <p class="text-sm text-dark">{{ $m->description }}</p>
                            </div>
                            <div>
                                <a class="px-3 inline-block py-2 bg-primary font-medium text-white rounded-lg mt-2 focus:outline-1" href="{{ route('redirect', $m) }}">Subscribe</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>