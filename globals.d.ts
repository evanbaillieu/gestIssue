declare module '*.svg' {
    export const ReactComponent: JSX.Element;

    const src: string;
    export default src;
}

declare module '*.png' {
    const content: string;
    export default content;
}