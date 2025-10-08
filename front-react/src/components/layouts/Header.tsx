"use client";
export default function Header() {
    return <header className="text-white">
        <div className="flex items-center justify-center py-2 bg-yellow-500 font-medium text-black">
            <p>سایت در حال توسعه میباشد.</p>
        </div>
        <div className="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 className="text-2xl font-bold">roodmap.ir</h1>
            <nav className="flex items-center gap-x-8 rtl">
                <a href="#features" className="hover:underline">ویژگی‌ها</a>
                <a href="#top-stacks" className="hover:underline">تاپ‌ترین‌ها</a>
                <a href="#why" className="hover:underline">چرا ما؟</a>
            </nav>
        </div>
    </header>
}