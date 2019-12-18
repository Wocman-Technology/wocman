import React from "react";

import { ContactHeaderWrapper } from "./contact.styles";
import { NavBar } from "../../components/navbar/navbar.component";
import { NewsLetter } from "../../components/newsletter/newsletter.component";
import MapContainer  from "../../components/maps/maps";
import ContactImage from "../../assets/contact-header.jpg";

export const Contact = () => (
         <>
           <ContactHeaderWrapper image={ContactImage}>
             <NavBar />
             <div className="landingwords">
               <h2>Contact Us</h2>
               <p>There is something particularly fascinating about us.</p>
             </div>
           </ContactHeaderWrapper>
             <MapContainer />
           <NewsLetter />
         </>
       );
