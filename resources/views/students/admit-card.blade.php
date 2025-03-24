<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admit Card : Anshu Memorial Academy</title>
        <link href="{{ asset('paper2.css') }}" rel="stylesheet" />
        <!-- <script src="https://anshumemorial.in/2024/js/tailwindcss-dev-3.4.3.js"></script> -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
        @vite('resources/css/app.css')

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
        <style>
            * {
                font-family: Nunito, Roboto, Helvetica, Georgia, Arial, sans-serif,
                    Comic Sans MS, Calibri;
            }
        </style>
        <style>
            @page {
                size: A4;
            }
        </style>
        <style>
            .main-content {
                /* background: url("./ama-128x128-0.15.webp") center/60px 60px round; */
                background: url("https://anshumemorial.in/2024/images/static/ama-128x128-0.15.webp") center/60px 60px round;
            }

            /* tbody tr th:first-child {
        text-align: left;
      } */
        </style>
    </head>

    <body class="A5 landscape">
        <section class="sheet flex flex-col p-4">
            <div class="main-content flex h-full flex-col border-2 border-black">
                <div class="flex justify-between px-2">
                    <div class="font-semibold">Estd. : 2017</div>
                    <div class="flex-grow text-center font-semibold">
                        AN ISO 9001:2015 CERTIFIED SCHOOL
                    </div>
                    <div class="font-semibold">Reg. No. 054631</div>
                </div>

                <div class="flex justify-between px-2 py-2">
                    <div>
                        <img width="84" src="{{ asset('images/static/ama300.webp') }}" alt="logo" />
                    </div>
                    <div class="flex flex-grow flex-col text-center">
                        <div class="font-[roboto,helvetica] text-4xl font-semibold">
                            Anshu Memorial Academy
                        </div>
                        <div class="font-semibold">
                            Bhatha Chowk, Bhatha Dasi, Rajapakar, Vaishali
                        </div>
                        <div class="text-sm">
                            Run & Managed by AnitaBindeshwar Foundation (Regd. under Company
                            Act 2013)
                        </div>
                    </div>
                    <div>
                        <img width="84" src="{{ asset('images/static/bbbp300.webp') }}"
                            alt="beti bachao beti padhao" />
                    </div>
                </div>

                <div class="p-0">
                    <div>
                        <div class="text-bold w-full border-t-2 border-black text-center">
                            <div>ADMIT CARD [ANNUAL EXAMINATION]</div>
                            <div>SESSION 2024-2025</div>
                        </div>
                    </div>

                    <div>
                        <div class="w-full border-t-2 border-black px-4 pt-6">
                            <div class="flex gap-x-2">
                                <div class="flex-grow">
                                    <table class="w-full text-left">
                                        <tr>
                                            <th class="whitespace-nowrap px-3 py-2">Name</th>
                                            <td class="whitespace-nowrap px-3 py-2">:</td>
                                            <td class="w-full whitespace-nowrap px-3 py-2">
                                                {{ $student->name }}
                                            </td>

                                        </tr>
                                        <tr>
                                            <th class="whitespace-nowrap px-3 py-2">Mother's Name</th>
                                            <td class="whitespace-nowrap px-3 py-2">:</td>
                                            <td class="whitespace-nowrap px-3 py-2">
                                                {{ $student->mother_name }}
                                            </td>

                                        </tr>
                                        <tr>
                                            <th class="whitespace-nowrap px-3 py-2">Father's Name</th>
                                            <td class="whitespace-nowrap px-3 py-2">:</td>
                                            <td class="whitespace-nowrap px-3 py-2">
                                                {{ $student->father_name }}
                                            </td>

                                        </tr>
                                        <tr>
                                            <th class="whitespace-nowrap px-3 py-2">Class</th>
                                            <td class="whitespace-nowrap px-3 py-2">:</td>
                                            <td class="whitespace-nowrap px-3 py-2">
                                                {{ $student->class }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="whitespace-nowrap px-3 py-2">Roll No.</th>
                                            <td class="whitespace-nowrap px-3 py-2">:</td>
                                            <td class="whitespace-nowrap px-3 py-2" colspan="4">
                                                {{ $student->roll_no }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                                <div>
                                    <div class="h-[180px] w-[150px] border-2 border-black bg-white">
                                        <img src="assets/person.jpg" class="invisible aspect-[4/3] h-full w-full"
                                            alt="student image" />

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-1"> </div> <!-- fill up the space -->
                <div class="flex w-full justify-between">
                    <span class="flex px-8 py-2">Stundent must carry the admit card during the examination time.</span>
                    <span class="flex-1 px-8 py-2 text-center">
                        <span class="border-t-2 border-dashed border-black px-8 font-semibold">Principal Sign</span>
                    </span>
                </div>
                <div class="flex-baseline flex w-full bg-green-100">

                </div>

            </div>

            <div class="w-full bg-gray-100 py-1 text-center text-xs">
                Designed &amp; Developed by
                <a class="font-semibold text-blue-600" href="https://skwebs.github.io">Anshu Memorial Academy (IT
                    Team)</a>
            </div>
        </section>
        <div class="w-3xl mx-auto flex flex-col gap-2">
            <button
                class="inline-block w-full rounded-lg bg-blue-500 px-4 py-2 text-center text-white hover:bg-blue-600 active:bg-blue-700 print:hidden"
                rel="noopener noreferrer">Print</button>
            <a href="{{ route('students.index') }}"
                class="inline-block w-full rounded-lg py-2 text-center text-blue-500 print:hidden"
                rel="noopener noreferrer">Back
                to List</a>
        </div>
    </body>

</html>
