import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { AppModule } from './app-module'; // Asegúrate de usar app-module
import { provideHttpClient, withFetch } from '@angular/common/http'; 

platformBrowserDynamic().bootstrapModule(AppModule, {
  providers: [
    provideHttpClient(withFetch()) // Provee la funcionalidad HTTP
  ]
})
  .catch(err => console.error(err));