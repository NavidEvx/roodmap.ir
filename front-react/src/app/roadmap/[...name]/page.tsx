"use client";

import { useMemo } from "react";
import { useRouter } from "next/navigation";
import Link from "next/link";

interface RoadmapDomain {
    name: string;
    description: string;
    roadmap: any[];
}

interface Props {
    params: {
        name?: string[];
    };
}

const domains: Record<string, RoadmapDomain> = {
    frontend: {
        name: "Frontend",
        description:
            "مسیر یادگیری توسعه فرانت‌اند شامل HTML، CSS، JavaScript و فریم‌ورک‌ها.",
        roadmap: [],
    },
    backend: {
        name: "Backend",
        description:
            "مسیر یادگیری توسعه بک‌اند شامل Node.js، PHP، Python و دیتابیس‌ها.",
        roadmap: [],
    },
    ai: {
        name: "AI / Machine Learning",
        description:
            "مسیر یادگیری هوش مصنوعی و یادگیری ماشین، شامل الگوریتم‌ها و مدل‌ها.",
        roadmap: [],
    },
};

export default function RoadmapPage({ params }: Props) {
    const router = useRouter();
    const name = params.name?.[0] || "";

    const domain = useMemo(() => {
        if (!name || !domains[name]) {
            router.replace("/404");
            return null;
        }
        return domains[name];
    }, [name, router]);

    const handleShare = () => {
        navigator.clipboard.writeText(window.location.href).then(() => {
            alert("لینک کپی شد!");
        });
    };

    if (!domain) return null;

    return (
        <div className="flex flex-col items-center px-4 py-8 mx-auto space-y-8">
            <div className="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                <div className="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                    <Link
                        href="/"
                        className="flex items-center gap-x-2 px-4 py-2 text-white bg-gray-700 rounded-lg hover:bg-gray-500 transition"
                    >
                        <span>تمامی رودمپ‌ها</span>
                    </Link>
                    <button
                        className="px-4 py-2 bg-yellow-500 rounded-lg hover:bg-yellow-700 transition"
                        onClick={handleShare}
                    >
                        اشتراک
                    </button>
                </div>
                <div className="text-center">
                    <h1 className="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-gray-100">
                        {domain.name}
                    </h1>
                    <p className="mt-2 text-gray-600 dark:text-gray-400">
                        {domain.description}
                    </p>
                </div>
            </div>

            {/* قدم‌ها */}
            <div className="relative w-full flex flex-col items-center gap-12">
                {[0, 1, 2].map((step) => (
                    <div
                        key={step}
                        className="max-w-6xl w-full flex flex-col items-center p-6 border bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md"
                    >
                        <div className="w-full flex items-center justify-between gap-4 my-4 sm:mt-0">
                            <div className="flex items-center gap-x-3 font-bold text-white text-xl">
                                <div className="w-10 h-10 flex items-center justify-center rounded-full bg-white text-black border-2 border-black">
                                    {step}
                                </div>
                                <h1>
                                    قدم {step} -{" "}
                                    {step === 0
                                        ? "یادگیری مقدمات"
                                        : step === 1
                                            ? "انتخاب زبان برنامه نویسی"
                                            : "ابزار ها"}
                                </h1>
                            </div>
                        </div>

                        <div className={step === 0 ? "w-full flex flex-auto gap-3" : "w-full grid grid-cols-3 gap-3"}>
                            {[...Array(3)].map((_, i) => (
                                <div
                                    key={i}
                                    className="flex items-center justify-center gap-x-3 p-2 text-blue-800 dark:text-blue-200 rounded-lg border-2 border-gray-500 hover:scale-105 transition-transform"
                                >
                                    {step === 0 ? (
                                        <>
                                            <img src="/images/languages/golang.png" width={32} alt="" />
                                            <span>Golang</span>
                                        </>
                                    ) : step === 1 ? (
                                        <>Go</>
                                    ) : (
                                        <>Go0</>
                                    )}
                                </div>
                            ))}
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}
