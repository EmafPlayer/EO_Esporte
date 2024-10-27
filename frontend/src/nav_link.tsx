import { ComponentProps } from "react";
import { twMerge } from "tailwind-merge";

interface LinkProps extends ComponentProps<'a'> {
    pageMode?: boolean;
}

export function Link({ pageMode, ...props}: LinkProps){
    return(
        <a {...props} className={twMerge('scroll-smooth font-medium px-14 pt-[14px] pb-[24px] hover:underline underline-offset-[12px] ease-in-out duration-300 text-[18px] rounded-md hover:bg-[#2d5f41b7] text-[#FFFFFF] hover:text-[#ffffff]') } >
            {props.children}
        </a>
    )
}