<!-- ====== Pricing Section Start -->
<section id="pricing"
         class="relative z-20 overflow-hidden bg-white pb-12 pt-20 dark:bg-dark lg:pb-[90px] lg:pt-[120px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-[60px] max-w-[510px] text-center">
                            <span class="mb-2 block text-lg font-semibold text-primary">
                                Pricing Table
                            </span>
                    <h2 class="mb-3 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                        Awesome Pricing Plan
                    </h2>
                    <p class="text-base text-body-color dark:text-dark-6">
                        No vulnerabilities, No fees!
                    </p>
                </div>
            </div>
        </div>
        <div class="-mx-4 flex flex-wrap justify-center">
            @foreach($memberships as $m)
                <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                    <div
                        class="relative z-10 mb-10 overflow-hidden rounded-xl bg-white px-8 py-10 shadow-pricing dark:bg-dark-2 sm:p-12 lg:px-6 lg:py-10 xl:p-14">
                            <span class="mb-5 block text-xl font-medium text-dark dark:text-white">
                                {{ $m->title }}
                            </span>
                        <h2 class="mb-11 text-4xl font-semibold text-dark dark:text-white xl:text-[42px] xl:leading-[1.21]">
                            <span class="text-xl font-medium">TND</span>
                            <span class="-ml-1 -tracking-[2px]">{{ $m->price    }}</span>
                            <span class="text-base font-normal text-body-color dark:text-dark-6">
                                    Per Month
                                </span>
                        </h2>
                        <div class="mb-[50px]">
                            <h5 class="mb-5 text-lg font-medium text-dark dark:text-white">
                                Features
                            </h5>
                            <div class="flex flex-col gap-[14px]">
                                @php($features = explode(',', $m->description))
                                @foreach($features as $feature)
                                    <p class="text-base text-body-color dark:text-dark-6">
                                        {{ $feature }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                        <a href="javascript:void(0)"
                           class="inline-block rounded-md bg-primary px-7 py-3 text-center text-base font-medium text-white transition hover:bg-primary-600">
                            Purchase Now
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ====== Pricing Section End -->
