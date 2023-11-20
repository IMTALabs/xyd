@extends('layouts.app')

@section('content')
    <img data-src="{{ asset('images/covers/Ảnh trang chủ web (trang con)-20.png') }}" class="w-full" alt="">

    <div class="max-lg:px-4">
        <div class="py-16 text-primary">
            <ul class="w-full container mx-auto flex items-center">
                <a href="{{ route('home') }}">{{ __("Home") }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('Help Center') }}</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                </svg>
                <a href="#">{{ __('FAQ') }}</a>
            </ul>
        </div>

        <h1 class="text-3xl mx-auto w-full container text-primary font-medium">{{ __('Frequently Asked Question') }}</h1>

        <div class="mt-8 w-full container mx-auto pb-16 space-y-8">
            <div x-data="{
                collapse: true,
                toggle() {
                    this.collapse = !this.collapse
                }
            }">
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none"
                    @click="toggle()">
                    {{ __('What is a "CE" certificate?') }}
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}"
                         xmlns="http://www.w3.org/2000/svg"
                         width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                    </svg>
                </h2>
                <p class="mt-4 text-justify" :class="{'hidden': collapse}">
                    {{ __('The "CE" mark is a safety certification mark that is regarded as a passport for manufacturers to open and enter the European market.') }}
                    <br><br>
                    {{ __('In the EU market, the "CE" mark is a mandatory certification mark, whether it is a product produced by an enterprise within the EU, or a product produced in other countries, in order to circulate freely in the EU market, it must be affixed with the "CE" mark to show that the product meets the basic requirements of the EU\'s "New Method of Technical coordination and standardization" directive.') }}
                    <br><br>
                    {{ __("Applicable country") }}
                    <br><br>
                    {{ __("Austria, Belgium, Cyprus, Czech Republic, Denmark, Estonia, Finland, France, Germany, Greece, Hungary, Italy, Ireland, Latvia, Lithuania, Luxembourg, Malta, Netherlands, Poland, Portugal, Slovakia, Slovenia, Spain, Sweden, Bulgaria, Romania, Croatia, Turkey, etc.") }}
                    <br><br>
                    {{ __("Once again, remind: products exported to EU countries (including Turkey, India, Egypt, Africa and other countries), including electrical products, construction products, machinery and equipment, must be CE certification before customs clearance and local sales.") }}
                </p>
            </div>
            <div x-data="{
                collapse: true,
                toggle() {
                    this.collapse = !this.collapse
                }
            }">
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none"
                    @click="toggle()">
                    {{ __('What do FOB, CNF, CIF refer to?') }}
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}"
                         xmlns="http://www.w3.org/2000/svg"
                         width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                    </svg>
                </h2>
                <p class="mt-4 text-justify" :class="{'hidden': collapse}">
                    {{ __('FOB means free on board. It is the price at which the seller loads the goods on the carrier designated by the buyer at the port specified in the contract and bears all costs and risks until the goods are loaded on the carrier.') }}
                    <br><br>
                    {{ __('CNF belongs to the past tense, and according to InCOterms 2000, CFR is the abbreviation of Cost and Freight (the outdated abbreviations C and F, CNF or C+F should no longer be used), and C&F (CFR) usually refers to FOB+ freight. The Seller must pay the freight and expenses necessary to transport the goods to the named port of destination, but the risk of loss or damage to the goods after delivery and any additional costs due to various events pass from the Seller to the Buyer.') }}
                    <br><br>
                    {{ __("CIF usually means FOB+ freight + insurance. Freight shall be charged to the port of destination and liability shall cease at the port of loading. However, on CIF basis, the seller must also take out Marine insurance against the risk of loss or damage to the buyer's goods in transit. It is therefore up to the seller to conclude the insurance contract and pay the premium. The buyer should note that the CIF term requires the seller to cover only a minimum of insurance risks. If the buyer needs a higher insurance coverage, it will need to explicitly agree with the seller or make additional insurance arrangements on its own. The CIF term requires the seller to clear the goods for export. The term applies only to sea and inland waterway transport.") }}
                    <br><br>
                    {{ __('Conversion between FOB, CNF and CIF:') }}
                    <br><br>
                    {{ __('1, FOB price converted to other prices CFR price =FOB price + foreign freight') }}<br>
                    {{ __('2, CIF price = (FOB price + foreign freight)/(1- insurance premium × insurance rate)') }}<br>
                    {{ __('3, CFR price converted to other prices FOB price =CFR price - foreign freight') }}<br>
                    {{ __('4, CIF price =CFR price/(1- insurance premium × insurance rate)') }}<br>
                    {{ __('5, CIF price converted to other prices FOB price =CIF price × (1- insurance premium × insurance rate) - foreign freight') }}
                    <br>
                    {{ __('6, CFR price =CIF price × (1- insurance premium × insurance rate) (Note: insurance premium: 110%, insurance rate: 1%)') }}
                </p>
            </div>
            <div x-data="{
                collapse: true,
                toggle() {
                    this.collapse = !this.collapse
                }
            }">
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none"
                    @click="toggle()">
                    {{ __('Why does UPS International Express divide blue single and red single?') }}
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}"
                         xmlns="http://www.w3.org/2000/svg"
                         width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                    </svg>
                </h2>
                <p class="mt-4 text-justify" :class="{'hidden': collapse}">
                    {{ __("UPS International Express is one of the three major international express delivery companies. It has many express products, the most common of which are blue and red express channels. The blue list is called UPS Worldwide expedited and is known as UPS World Express and is the fastest and lowest cost delivery method of UPS.") }}
                    <br><br>
                    {{ __("Ups International Express") }}
                    <br><br>
                    {{ __("In addition to UPS Worldwide expedited, which is marked blue, it is also marked red, the source of the red list. In general, what we call the red ticket is UPS Worldwidesaver-UPS express global speed. Red invoices are usually faster than blue invoices and cost more, which is suitable for shippers with high logistics timeliness requirements.") }}
                    <br><br>
                    {{ __("What is the specific difference between the red single and blue single of UPS international Express?") }}
                    <br><br>
                    {{ __("1. Different services.") }}<br>
                    {{ __("UPS express red and blue orders enjoy significantly different services, including timeliness, stability, delivery efficiency and so on. Red order aging faster, better stability, higher delivery efficiency. Blue single aging slow, poor stability, low delivery efficiency.") }}
                    <br><br>
                    {{ __("2. Different quotations.") }}<br>
                    {{ __("The quotation of UPS express red and blue orders is also significantly different. The quotation of the red express channel is generally higher than that of the blue single. For example, to send 5 kilograms of items to the United States, the red single may need about 290 yuan, but the blue single only needs about 260 yuan, and the price of the two is significantly different.") }}
                    <br><br>
                    {{ __("3, transportation time is different.") }}<br>
                    {{ __("The shipping time of UPS express red order is: Japan, South Korea, Malaysia and other Southeast Asian regions, the time limit is 1-3 days. The limitation of the United States, Canada, Mexico, Germany, France, Italy and other European and American countries is about 3-5 days.") }}
                    <br><br>
                    {{ __("The shipping time of UPS express blue order is: Japan, South Korea, Malaysia and other Southeast Asian regions, the time is about 2-3 days. The limitation of the United States, Canada, Mexico, the United Kingdom, France, Germany, Spain and other European and American countries is about 3-7 days.") }}
                    <br><br>
                    {{ __("4, warehousing difficulty is different.") }}<br>
                    {{ __("UPS express red single and blue single warehousing difficulty is not the same. UPS express red order belongs to the express type, and has the right of priority shipment compared with the blue order. When air transport resources are limited, there is more cargo. UPS will first load the shipping space into the red ticket channel, and then load the remaining shipping space into the blue ticket. This means that in the case of large shipments, UPS express blue single channel is more prone to warehouse delay, and logistics timeliness is significantly affected.") }}
                    <br><br>
                    {{ __("5, how to choose UPS express red single and blue single?") }}<br>
                    {{ __("So how to choose UPS express red single and blue single? UPS express red and blue orders have significant differences in price and timeliness. Red single price is high, timeliness is fast, blue single price is low, timeliness is slow. In addition, red single peak season is not easy to warehouse, blue single peak season is easier to warehouse. Therefore, if the shipper has high requirements for logistics timeliness, red order is the best choice. If the requirement of timeliness is not too high, but you want the price to be cheap, blue single is the best choice.") }}
                </p>
            </div>
            <div x-data="{
                collapse: true,
                toggle() {
                    this.collapse = !this.collapse
                }
            }">
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none"
                    @click="toggle()">
                    {{ __('The difference between Hong Kong DHL and Mainland DHL?') }}
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}"
                         xmlns="http://www.w3.org/2000/svg"
                         width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                    </svg>
                </h2>
                <p class="mt-4 text-justify" :class="{'hidden': collapse}">
                    {{ __("DHL is a joint venture express freight company founded in the United States and is currently a joint venture between Germany and the United States. It is one of the largest air express freight companies in the world.") }}
                    <br><br>
                    {{ __("First, different names and partners") }}
                    <br><br>
                    {{ __('Mainland DHL, is a joint venture between DHL and Sinotrans, self-proclaimed: Sinotrans DHL. In Hong Kong, DHL company incorporated DHL International, daily use of DHL, and in order to distinguish between Hong Kong DHL and mainland DHL, so in general, we call Hong Kong DHL: "Hong Kong DHL"') }}
                    <br><br>
                    {{ __("Second, the difference and distinction of prices and policies") }}
                    <br><br>
                    {{ __("Because DHL in mainland China is a joint venture, and the current domestic and international express business in mainland China is still") }}
                    <br><br>
                    {{ __("It is a relatively monopolistic industry, coupled with underdeveloped domestic freight resources, so the current price of DHL in the mainland is relatively high. As an international freight transfer place, Hong Kong is relatively competitive, so the price of DHL in Hong Kong is relatively low. Taking a 0.5KGS document as an example, the price of DHL in Hong Kong and mainland DHL may differ by about 1 times the price. It can be seen why many customers prefer to choose Hong Kong DHL rather than mainland DHL in order to save costs. Hong Kong is a free trade port, and DHL transshipment in Hong Kong generally does not require customs declaration, which saves customers from cumbersome procedures and valuable time.") }}
                    <br><br>
                    {{ __("Three, the delivery time is different and different") }}
                    <br><br>
                    {{ __("Hong Kong DHL is generally through the Shenzhen agent customs clearance delivery to Hong Kong, and then by Hong Kong DHL directly on the plane to the world. Under normal circumstances, mainland DHL will send freight directly to the nearest international airport, such as Guangzhou, Shanghai, Shenzhen, etc., directly on the plane, and then shipped to all parts of the world. Therefore, under normal circumstances, the speed of DHL to the mainland will be about 1-2 days faster than that of DHL in Hong Kong. However, because the international flights in the mainland are not very developed, many international flights are also transited through Hong Kong. Therefore, in addition to Southeast Asia, South Korea, Japan and other regions, mainland DHL is faster than Hong Kong DHL, if you go to the Middle East, Africa, Europe and America and other places, There is basically no difference in the timeliness of the two, because in some relatively distant areas, mainland DHL also needs to first send the goods to Hong Kong and then operate. Domestic DHL generally receives the express, there will be a tracking number, which can be immediately queried on the DHL official website, and if it is sent to Hong Kong DHL, the tracking number must be generated through the replacement of the tracking number, which can be queried on the DHL official website, or the original tracking number can be queried by the sender's reference information on the DHL official website. Once the goods are delivered to DHL, other delivery times, insurance clause 2 basically makes no difference. Hong Kong DHL and domestic DHL that is safer, is it risky to take Hong Kong DHL? After the goods are delivered to DHL, the safety and risk of the two are basically no different, but because the goods sent to DHL in Hong Kong are delivered to DHL in Hong Kong by the mainland's domestic agency company, so as long as the regular agency company is selected, there is basically no risk.") }}
                </p>
            </div>
            <div x-data="{
                collapse: true,
                toggle() {
                    this.collapse = !this.collapse
                }
            }">
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none"
                    @click="toggle()">
                    {{ __('How international express companies measure the size of goods?') }}
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}"
                         xmlns="http://www.w3.org/2000/svg"
                         width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                    </svg>
                </h2>
                <p class="mt-4 text-justify" :class="{'hidden': collapse}">
                    <a href="http://xydlog.com/arts_ds.php?id=15" target="_blank">http://xydlog.com/arts_ds.php?id=15</a>
                </p>
            </div>
            <div x-data="{
                collapse: true,
                toggle() {
                    this.collapse = !this.collapse
                }
            }">
                <h2 class="flex items-center gap-2 max-lg:text-sm text-primary text-2xl cursor-pointer select-none"
                    @click="toggle()">
                    {{ __('Definition of logistics') }}
                    <svg class="transition-all shrink-0" :class="{'rotate-90': !collapse}"
                         xmlns="http://www.w3.org/2000/svg"
                         width="20" height="20" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12.6 12L8.7 8.1q-.275-.275-.275-.7t.275-.7q.275-.275.7-.275t.7.275l4.6 4.6q.15.15.213.325t.062.375q0 .2-.063.375t-.212.325l-4.6 4.6q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l3.9-3.9Z"/>
                    </svg>
                </h2>
                <p class="mt-4 text-justify" :class="{'hidden': collapse}">
                    {{ __("China's logistics terminology standard defines logistics as: logistics is the physical flow process of goods from the supply place to the receiving place, according to the actual needs, the transportation, storage, loading and unloading, handling, packaging, circulation processing, distribution, information processing and other functions organically combined to achieve user requirements.") }}
                </p>
            </div>
        </div>
    </div>
@endsection
