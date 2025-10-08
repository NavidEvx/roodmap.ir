"use client";

interface Props {
    name: string;
}

export default function Roadmaps({ name }: Props) {
    return (
        <div className="flex items-center justify-center my-8">
            <div className="flex-grow border-t border-gray-700"></div>
            <h2 className="py-1 px-4 rounded-lg bg-gray-800/50 border border-gray-700 text-lg sm:text-xl text-center text-gray-900 dark:text-gray-400">
                { name }
            </h2>
            <div className="flex-grow border-t border-gray-700"></div>
        </div>
    );
}