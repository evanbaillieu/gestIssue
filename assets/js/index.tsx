import React from "react";
import {createRoot} from 'react-dom/client';
import { App } from "./app";

const container = document.getElementById('app')
const root = createRoot(container!); // if createRoot(container) in js

root.render(<App />);