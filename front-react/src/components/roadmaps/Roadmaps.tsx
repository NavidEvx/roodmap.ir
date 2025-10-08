"use client";

import Link from "next/link";

interface Item {
    name: string;
    link: string;
}

interface Props {
    type: number;
}

export default function Roadmaps({ type }: Props) {
    const skills: Item[] = [
        { name: "React", link: "react" },
        { name: "Vue", link: "vue" },
        { name: "Laravel", link: "laravel" },
        { name: "SQL", link: "sql" },
        { name: "Node.js", link: "nodejs" },
    ];

    const domains: Item[] = [
        { name: "Frontend", link: "frontend" },
        { name: "Backend", link: "backend" },
        { name: "AI", link: "ai" },
        { name: "Mobile", link: "mobile" },
        { name: "DevOps", link: "devops" },
    ];

    const items: Item[] = type === 2 ? skills : domains;

    return (
        <div className="grid grid-cols-3 justify-center gap-2 text-center">
            {items.map((item, index) => (
                <Link
                    key={index}
                    href={`/roadmap/${item.link}`}
                    className="w-full py-3 bg-gray-800/30 border border-gray-700 text-white rounded-lg hover:border-gray-500 transform transition"
                >
                    {item.name}
                </Link>
            ))}
        </div>
    );
}