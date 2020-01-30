import React from "react";
import { NavBar } from "../../components/navbar/navbar.component";
import { Footer } from "../../components/footer/footer.component";
import { Container } from "./profile-setup.styles";

export const ProfileSetup = () => {
  return (
    <>
      <NavBar />
      <Container>
        <div>
          <p>Thank you for signing up at Wocman</p>
          <small>
            Fill out your details to verify your profile for work opportunities
          </small>
        </div>
        <div>
            <p>What service do you specialize in ?</p>
            <div>
                <select name="specialization">
                    <option value="Carpenter">Carpenter</option>
                </select>
            </div>
        </div>
      </Container>
      <Footer />
    </>
  );
};
