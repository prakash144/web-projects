import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { MatButtonModule, MatToolbarModule,MatInputModule, MatProgressSpinnerModule, MatCardModule } from '@angular/material';

@NgModule({
    imports: [MatButtonModule, MatToolbarModule,MatInputModule, MatProgressSpinnerModule, MatCardModule ],
    exports: [MatButtonModule, MatToolbarModule,MatInputModule, MatProgressSpinnerModule, MatCardModule ],
})

export class MaterialModule { }