import './bootstrap';

import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

// TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com 
import { Tooltip, initTE } from "tw-elements";
initTE({ Tooltip });

import.meta.glob([
    '../images/**',
    '../fonts/**',
  ]);
  