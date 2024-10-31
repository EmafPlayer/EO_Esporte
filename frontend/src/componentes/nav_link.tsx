import { ComponentProps } from "react";
import { twMerge } from "tailwind-merge";

interface LinkProps extends ComponentProps<'a'> {
    typePage: boolean
}

export function Link( { typePage, ...props }: LinkProps ){
    return(
        <a {...props} className={twMerge('scroll-smooth font-medium px-12 pt-[14px] pb-[24px] hover:underline underline-offset-[12px] ease-in-out duration-300 text-[20px] rounded-md hover:bg-[#2d5f41b7]', typePage ? 'text-slate-300 hover:text-slate-300' : 'text-[#FFFFFF] hover:text-[#ffffff]' )} >
            {props.children}
        </a>
    )
}