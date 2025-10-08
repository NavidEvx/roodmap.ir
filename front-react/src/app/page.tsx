"use client";
import Roadmaps from "../components/roadmaps/Roadmaps";
import SectionHeader from "../components/roadmaps/SectionHeader";

export default function Home() {
    return <div className="rtl min-h-screen text-gray-800 dark:text-gray-100">
        <section className="text-center px-6 py-20 text-white">
            <h1 className="text-5xl sm:text-6xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-purple-500 to-pink-500 drop-shadow-lg">
                roodmap.ir
            </h1>
            <p className="text-lg sm:text-xl mb-8">نقشه راه یادگیری برنامه‌نویسی به صورت فارسی. مسیر خودت رو مرحله به مرحله
                دنبال کن!</p>
            <div className="flex justify-center gap-4">
                <a href="#top-stacks"
                   className="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-100 transition">شروع
                    مسیرها</a>
            </div>
        </section>

        <section id="top-domains" className="mt-12 mx-auto">
            <SectionHeader name={'رودمپ بر اساس شاخه'}/>
            <div className="max-w-3xl mx-auto">
                <Roadmaps type={1}/>
            </div>
        </section>

        <section id="top-skills" className="mt-12 mx-auto">
            <SectionHeader name={'رودمپ بر اساس مهارت'}/>
            <div className="max-w-3xl mx-auto">
                <Roadmaps type={2}/>
            </div>
        </section>

        <section className="px-6 py-16 mt-12">
            <h2 className="text-3xl sm:text-4xl font-bold text-center mb-12">چرا باید از roodmap.ir استفاده کنید؟</h2>
            <div className="max-w-4xl mx-auto text-center text-gray-700 dark:text-gray-300 space-y-6 text-base sm:text-lg">
                <p>تمام مسیرها و منابع فارسی و مرحله به مرحله هستند.</p>
                <p>می‌تونی سرعت و مسیر یادگیری خودت رو انتخاب کنی.</p>
                <p>تمرکز روی مهارت‌های عملی و پروژه محور.</p>
            </div>
        </section>
    </div>
}