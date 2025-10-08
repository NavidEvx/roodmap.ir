<script setup lang="ts">
const route = useRoute();
const router = useRouter();
const config = useRuntimeConfig();
const name = route.params.name?.[0] as string || '';

// interface Roadmap {
//     name: string;
//     description: string;
//     roadmap: any[];
// }

const {data: roadmap} = await useFetch(config.public.apiBase + '/api/roadmaps/' + 1, {
    transform: (res: any) => res.data
});
</script>

<template>
    <div v-if="true" class="flex flex-col items-center gap-y-4">
        <section
            class="w-full relative bg-gradient-to-tr from-blue-900 via-gray-900 to-slate-900 py-16 overflow-hidden">
            <div class="absolute inset-0">
                <img src="/images/roadmap-bg.jpg" alt="Roadmap Background" class="w-full h-full object-cover object-top opacity-30">
            </div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center mb-6 gap-x-5">
                            <div class="w-16 h-16 flex items-center rounded-lg border px-3">
                                <img src="/images/languages/golang.png" alt="Python Logo"
                                     class="object-cover object-top">
                            </div>
                            <h1 class="text-4xl font-bold text-white">{{ roadmap.title }}</h1>
                        </div>
                        <p class="text-xl text-gray-300 mb-8">{{ roadmap.description }}</p>
                        <div class="grid grid-cols-3 gap-6 mb-8">
                            <div class="bg-gray-800 border border-blue-500 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-blue-400 mb-1">8-12</div>
                                <div class="text-gray-300 text-sm">Months</div>
                            </div>
                            <div class="bg-gray-800 border border-green-500 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-green-400 mb-1">125K+</div>
                                <div class="text-gray-300 text-sm">Learners</div>
                            </div>
                            <div class="bg-gray-800 border border-yellow-500 rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-yellow-400 mb-1">4.9/5</div>
                                <div class="text-gray-300 text-sm">Rating</div>
                            </div>
                        </div>
                        <button class="bg-gradient-to-r from-blue-600 to-cyan-600 text-white px-8 py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-cyan-700 transition-colors whitespace-nowrap cursor-pointer">
                            شروع یادگیری
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-12 bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-gray-800 border border-gray-700 rounded-xl p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                        <div class="text-center">
                            <div class="relative w-32 h-32 mx-auto mb-4">
                                <svg class="w-32 h-32 transform -rotate-90">
                                    <circle cx="64" cy="64" r="56" stroke="currentColor"
                                            stroke-width="8" fill="transparent" class="text-gray-700"></circle>
                                    <circle cx="64" cy="64" r="56" stroke="currentColor"
                                            stroke-width="8" fill="transparent" stroke-dasharray="351.86"
                                            stroke-dashoffset="228.709"
                                            class="text-blue-500 transition-all duration-1000"></circle>
                                </svg>
                                <div class="absolute inset-0 flex items-center justify-center"><span
                                    class="text-2xl font-bold text-white">35%</span></div>
                            </div>
                            <h3 class="text-xl font-semibold text-white mb-2">پیشرفت کلی</h3>
                            <p class="text-gray-400">3/8 مبحث تکمیل شده</p></div>
                        <div class="lg:col-span-2">
                            <h3 class="text-xl font-semibold text-white mb-4">مسیر یادگیری شما</h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between"><span
                                    class="text-gray-300">مبحث فعلی:</span><span
                                    class="text-blue-400 font-medium">Object-Oriented Programming</span></div>
                                <div class="flex items-center justify-between"><span
                                    class="text-gray-300">زمان صرف شده:</span><span
                                    class="text-green-400 font-medium">45 hours</span></div>
                                <div class="flex items-center justify-between"><span
                                    class="text-gray-300">پیش بینی زمان اتمام:</span><span
                                    class="text-yellow-400 font-medium">March 2025</span></div>
                            </div>
                            <div class="flex gap-x-4 mt-6">
                                <button
                                    class="bg-blue-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-blue-700 transition-colors whitespace-nowrap cursor-pointer">
                                    ادامه یادگیری
                                </button>
                                <button
                                    class="bg-gray-700 text-gray-300 px-6 py-2 rounded-lg font-medium hover:bg-gray-600 transition-colors whitespace-nowrap cursor-pointer">
                                    مشاهده مدرک
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-16 bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <div class="lg:col-span-2"><h2 class="text-3xl font-bold text-white mb-8">مباحث یادگیری</h2>
                        <div class="space-y-6">
                            <div
                                 class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div
                                                 class="bg-green-500 w-4 h-4 rounded-full me-3"></div>
                                            <h3 class="text-xl font-semibold text-white">Python
                                                Fundamentals</h3></div>
                                        <div class="flex items-center space-x-4"><span
                                            class="text-blue-400 text-sm">4-6 هفته</span>
                                            <button
                                                    class="text-gray-400 hover:text-white cursor-pointer"><i
                                                class="fas fa-chevron-up"></i></button>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 mb-4">Learn the basics of Python
                                        programming including syntax, variables, data types, and control structures.</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-4"><span
                                            class="text-gray-500 text-sm">25 exercises</span><span
                                            class="text-gray-500 text-sm">3 projects</span></div>
                                        <div class="text-right">
                                            <div class="text-sm text-gray-400 mb-1">پیشرفت</div>
                                            <div class="w-24 bg-gray-700 rounded-full h-2">
                                                <div
                                                     class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full transition-all duration-300"
                                                     style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div><!----></div>
                                <div class="border-t border-gray-700 p-6 bg-gray-850">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div><h4
                                                                    class="text-lg font-semibold text-white mb-3">Topics
                                            Covered</h4>
                                            <ul class="space-y-2">
                                                <li class="flex items-center text-gray-300"><i
                                                   
                                                    class="fas fa-check-circle text-green-500 mr-2 text-sm"></i>
                                                    Variables and Data Types
                                                </li>
                                                <li class="flex items-center text-gray-300"><i
                                                   
                                                    class="fas fa-check-circle text-green-500 mr-2 text-sm"></i> Control
                                                    Flow (if/else, loops)
                                                </li>
                                                <li class="flex items-center text-gray-300"><i
                                                   
                                                    class="fas fa-check-circle text-green-500 mr-2 text-sm"></i>
                                                    Functions and Scope
                                                </li>
                                                <li class="flex items-center text-gray-300"><i
                                                   
                                                    class="fas fa-check-circle text-green-500 mr-2 text-sm"></i> Error
                                                    Handling
                                                </li>
                                                <li class="flex items-center text-gray-300"><i
                                                   
                                                    class="fas fa-check-circle text-green-500 mr-2 text-sm"></i> File
                                                    I/O Operations
                                                </li>
                                            </ul>
                                        </div>
                                        <div><h4
                                                                    class="text-lg font-semibold text-white mb-3">
                                            Learning Resources</h4>
                                            <div class="space-y-3">
                                                <div class="bg-gray-700 rounded-lg p-3">
                                                    <div class="flex items-center justify-between">
                                                        <span class="text-gray-300 text-sm">Python Official Tutorial</span><span
                                                       
                                                        class="text-blue-400 text-xs">Documentation</span></div>
                                                </div>
                                                <div class="bg-gray-700 rounded-lg p-3">
                                                    <div class="flex items-center justify-between">
                                                        <span class="text-gray-300 text-sm">Interactive Python Exercises</span><span
                                                        class="text-blue-400 text-xs">Practice</span>
                                                    </div>
                                                </div>
                                                <div class="bg-gray-700 rounded-lg p-3">
                                                    <div class="flex items-center justify-between">
                                                        <span class="text-gray-300 text-sm">Python Basics Video Series</span><span
                                                        class="text-blue-400 text-xs">Video</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex space-x-4 mt-6">
                                        <button
                                                class="bg-green-600 text-white hover:bg-green-700 px-6 py-2 rounded-lg font-medium transition-colors whitespace-nowrap cursor-pointer">
                                            Review Module
                                        </button>
                                        <button
                                                class="bg-gray-700 text-gray-300 px-4 py-2 rounded-lg font-medium hover:bg-gray-600 transition-colors whitespace-nowrap cursor-pointer">
                                            <i class="fas fa-play mr-2"></i>Practice
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div
                                 class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="bg-blue-500 w-4 h-4 rounded-full me-3"></div>
                                            <h3 class="text-xl font-semibold text-white">Data
                                                Structures &amp; Algorithms</h3></div>
                                        <div class="flex items-center space-x-4"><span
                                            class="text-blue-400 text-sm">6-8 هفته</span>
                                            <button
                                                    class="text-gray-400 hover:text-white cursor-pointer"><i
                                                class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 mb-4">Master Python's built-in data
                                        structures and learn fundamental algorithms for problem-solving.</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-4"><span
                                            class="text-gray-500 text-sm">35 exercises</span><span
                                            class="text-gray-500 text-sm">4 projects</span></div>
                                        <div class="text-right">
                                            <div class="text-sm text-gray-400 mb-1">پیشرفت</div>
                                            <div class="w-24 bg-gray-700 rounded-full h-2">
                                                <div
                                                     class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full transition-all duration-300"
                                                     style="width: 85%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4"><span
                                                                               class="text-orange-400 text-sm">Prerequisites: Python Fundamentals</span>
                                    </div>
                                </div><!----></div>
                            <div
                                 class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="bg-blue-500 w-4 h-4 rounded-full me-3"></div>
                                            <h3 class="text-xl font-semibold text-white">
                                                Object-Oriented Programming</h3></div>
                                        <div class="flex items-center space-x-4"><span
                                            class="text-blue-400 text-sm">5-7 هفته</span>
                                            <button
                                                    class="text-gray-400 hover:text-white cursor-pointer"><i
                                                class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 mb-4">Learn OOP concepts in Python
                                        including classes, inheritance, polymorphism, and design patterns.</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-4"><span
                                            class="text-gray-500 text-sm">30 exercises</span><span
                                            class="text-gray-500 text-sm">5 projects</span></div>
                                        <div class="text-right">
                                            <div class="text-sm text-gray-400 mb-1">پیشرفت</div>
                                            <div class="w-24 bg-gray-700 rounded-full h-2">
                                                <div
                                                     class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full transition-all duration-300"
                                                     style="width: 45%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4"><span
                                                                               class="text-orange-400 text-sm">Prerequisites: Python Fundamentals, Data Structures &amp; Algorithms</span>
                                    </div>
                                </div><!----></div>
                            <div
                                 class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="bg-gray-500 w-4 h-4 rounded-full me-3"></div>
                                            <h3 class="text-xl font-semibold text-white">Web
                                                Development with Django/Flask</h3></div>
                                        <div class="flex items-center space-x-4"><span
                                            class="text-blue-400 text-sm">8-10 هفته</span>
                                            <button
                                                    class="text-gray-400 hover:text-white cursor-pointer"><i
                                                class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 mb-4">Build web applications using
                                        Python's most popular web frameworks.</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-4"><span
                                            class="text-gray-500 text-sm">20 exercises</span><span
                                            class="text-gray-500 text-sm">6 projects</span></div>
                                        <div class="text-right">
                                            <div class="text-sm text-gray-400 mb-1">پیشرفت</div>
                                            <div class="w-24 bg-gray-700 rounded-full h-2">
                                                <div
                                                     class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full transition-all duration-300"
                                                     style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4"><span
                                                                               class="text-orange-400 text-sm">Prerequisites: Object-Oriented Programming</span>
                                    </div>
                                </div><!----></div>
                            <div
                                 class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="bg-gray-500 w-4 h-4 rounded-full me-3"></div>
                                            <h3 class="text-xl font-semibold text-white">Data Science
                                                Libraries</h3></div>
                                        <div class="flex items-center space-x-4"><span
                                            class="text-blue-400 text-sm">6-8 هفته</span>
                                            <button
                                                    class="text-gray-400 hover:text-white cursor-pointer"><i
                                                class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 mb-4">Explore NumPy, Pandas, Matplotlib,
                                        and other essential data science libraries.</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-4"><span
                                            class="text-gray-500 text-sm">40 exercises</span><span
                                            class="text-gray-500 text-sm">7 projects</span></div>
                                        <div class="text-right">
                                            <div class="text-sm text-gray-400 mb-1">پیشرفت</div>
                                            <div class="w-24 bg-gray-700 rounded-full h-2">
                                                <div
                                                     class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full transition-all duration-300"
                                                     style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4"><span
                                                                               class="text-orange-400 text-sm">Prerequisites: Data Structures &amp; Algorithms</span>
                                    </div>
                                </div><!----></div>
                            <div
                                 class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="bg-gray-500 w-4 h-4 rounded-full me-3"></div>
                                            <h3 class="text-xl font-semibold text-white">Machine
                                                Learning with Python</h3></div>
                                        <div class="flex items-center space-x-4"><span
                                            class="text-blue-400 text-sm">10-12 هفته</span>
                                            <button
                                                    class="text-gray-400 hover:text-white cursor-pointer"><i
                                                class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 mb-4">Introduction to machine learning
                                        using scikit-learn and other ML libraries.</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-4"><span
                                            class="text-gray-500 text-sm">25 exercises</span><span
                                            class="text-gray-500 text-sm">8 projects</span></div>
                                        <div class="text-right">
                                            <div class="text-sm text-gray-400 mb-1">پیشرفت</div>
                                            <div class="w-24 bg-gray-700 rounded-full h-2">
                                                <div
                                                     class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full transition-all duration-300"
                                                     style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4"><span
                                                                               class="text-orange-400 text-sm">Prerequisites: Data Science Libraries</span>
                                    </div>
                                </div><!----></div>
                            <div
                                 class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="bg-gray-500 w-4 h-4 rounded-full me-3"></div>
                                            <h3 class="text-xl font-semibold text-white">Testing
                                                &amp; Debugging</h3></div>
                                        <div class="flex items-center space-x-4"><span
                                            class="text-blue-400 text-sm">4-5 هفته</span>
                                            <button
                                                    class="text-gray-400 hover:text-white cursor-pointer"><i
                                                class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 mb-4">Learn testing methodologies,
                                        debugging techniques, and code quality practices.</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-4"><span
                                            class="text-gray-500 text-sm">20 exercises</span><span
                                            class="text-gray-500 text-sm">3 projects</span></div>
                                        <div class="text-right">
                                            <div class="text-sm text-gray-400 mb-1">پیشرفت</div>
                                            <div class="w-24 bg-gray-700 rounded-full h-2">
                                                <div
                                                     class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full transition-all duration-300"
                                                     style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4"><span
                                                                               class="text-orange-400 text-sm">Prerequisites: Object-Oriented Programming</span>
                                    </div>
                                </div><!----></div>
                            <div
                                 class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center">
                                            <div class="bg-gray-500 w-4 h-4 rounded-full me-3"></div>
                                            <h3 class="text-xl font-semibold text-white">Advanced
                                                Python &amp; Best Practices</h3></div>
                                        <div class="flex items-center space-x-4"><span
                                            class="text-blue-400 text-sm">6-8 هفته</span>
                                            <button
                                                    class="text-gray-400 hover:text-white cursor-pointer"><i
                                                class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <p class="text-gray-400 mb-4">Advanced Python concepts,
                                        performance optimization, and professional development practices.</p>
                                    <div class="flex items-center justify-between mb-4">
                                        <div class="flex items-center space-x-4"><span
                                            class="text-gray-500 text-sm">15 exercises</span><span
                                            class="text-gray-500 text-sm">4 projects</span></div>
                                        <div class="text-right">
                                            <div class="text-sm text-gray-400 mb-1">پیشرفت</div>
                                            <div class="w-24 bg-gray-700 rounded-full h-2">
                                                <div
                                                     class="bg-gradient-to-r from-blue-500 to-green-500 h-2 rounded-full transition-all duration-300"
                                                     style="width: 0%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4"><span
                                                                               class="text-orange-400 text-sm">Prerequisites: Testing &amp; Debugging</span>
                                    </div>
                                </div><!----></div>
                        </div>
                    </div>
                    <div class="space-y-6">
                        <div class="bg-gray-800 border border-gray-700 rounded-xl p-6"><h3
                            class="text-lg font-semibold text-white mb-4">مسیر کلی یادگیری</h3>
                            <div class="space-y-4">
                                <div class="flex items-start" v-for="i in 8">
                                    <div
                                         class="bg-green-500 w-3 h-3 rounded-full mt-1 me-3 flex-shrink-0"></div>
                                    <div>
                                        <div class="text-white text-sm font-medium">شروع آموزش زبان Go</div>
                                        <div class="text-gray-400 text-xs">Jan 15, 2025</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-800 border border-gray-700 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-white mb-4">منابع پیشنهادی</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="text-white font-medium mb-2">داکیومنت رسمی</h4>
                                    <div class="space-y-2">
                                        <a v-for="i in 5"
                                            href="#" class="block text-blue-400 hover:text-blue-300 text-sm cursor-pointer">Python.org Documentation</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div
            class="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
            <div class="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                <NuxtLink
                    class="flex items-center gap-x-2 px-4 py-2 text-white bg-gray-700 rounded-lg hover:bg-gray-500 transition"
                    to="/">
                    <Icon name="tabler:arrow-right"/>
                    <span>تمامی رودمپ‌ها</span>
                </NuxtLink>
                <button
                    class="px-4 py-2 bg-yellow-500 rounded-lg hover:bg-yellow-700 transition"
                    @click="navigator.clipboard.writeText(window.location.href).then(() => alert('لینک کپی شد!'))">
                    اشتراک
                </button>
            </div>
            <div class="text-center">
                <!--                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-gray-100">{{ roadmap.name }}</h1>-->
                <!--                <p class="mt-2 text-gray-600 dark:text-gray-400">{{ roadmap.description }}</p>-->
            </div>
        </div>
        
        
        <div class="relative w-full flex flex-col items-center gap-12">
            
            <div ref="box1"
                 class="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                <div class="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                    <div class="flex items-center gap-x-3 font-bold text-white text-xl">
                        <div
                            class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black border-2 border-black">
                            0
                        </div>
                        <h1>قدم صفر - یادگیری مقدمات</h1>
                    </div>
                </div>
                <div class="w-full flex flex-auto gap-3">
                    <div v-for="i in 3" :key="i"
                         class="flex items-center justify-center gap-x-3 p-2 text-blue-800 dark:text-blue-200 rounded-lg border-2 border-gray-500 hover:scale-105 transition-transform">
                        <img src="/images/languages/golang.png" width="32" alt=""/>
                        <span>Golang</span>
                    </div>
                </div>
            </div>
            
            <div ref="box1"
                 class="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                <div class="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                    <div class="flex items-center gap-x-3 font-bold text-white text-xl">
                        <div
                            class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black border-2 border-black">
                            1
                        </div>
                        <h1>قدم اول - انتخاب زبان برنامه نویسی</h1>
                    </div>
                </div>
                <div class="w-full grid grid-cols-3 gap-3">
                    <div v-for="i in 3" :key="i"
                         class="flex items-center justify-center p-4 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-lg shadow hover:scale-105 transition-transform">
                        Go
                    </div>
                </div>
            </div>
            
            <div ref="box2"
                 class="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                <div class="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                    <div class="flex items-center gap-x-3 font-bold text-white text-xl">
                        <div
                            class="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black border-2 border-black">
                            2
                        </div>
                        <h1>قدم دوم - ابزار ها</h1>
                    </div>
                </div>
                <div class="w-full grid grid-cols-3 gap-3">
                    <div v-for="i in 3" :key="i"
                         class="flex items-center justify-center p-4 bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 rounded-lg shadow hover:scale-105 transition-transform">
                        Go0
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>