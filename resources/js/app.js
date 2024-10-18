import './bootstrap';
import '@fortawesome/fontawesome-free/css/all.min.css';

import ApexCharts from 'apexcharts'
import jQuery from 'jquery';
import Swal from 'sweetalert2'

import * as Sentry from "@sentry/browser";
import { Integrations } from "@sentry/tracing";

Sentry.init({
    dsn: "https://889cd3fa99b0f48f225826bab18e3246@o4508139995529216.ingest.us.sentry.io/4508139997036544@o0.ingest.sentry.io/0", // Reemplaza con tu DSN de Sentry
    integrations: [new Integrations.BrowserTracing()],
    tracesSampleRate: 1.0, // Ajusta esto según tus necesidades
});

window.$ = jQuery;
window.jQuery = jQuery;


window.ApexCharts = ApexCharts;

window.Swal = Swal;
