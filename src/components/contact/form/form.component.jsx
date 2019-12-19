import React from "react";

import { FormWrapper, ButtonWrapper } from "./form.styles";

export const ContactForm = () => (
  <FormWrapper>
    <div>
      <h1>Send us a message</h1>
      <small>
        comments, questions? drops us a note, and we'll get back with you
        shortly!
      </small>
    </div>
    <div>
      <input type="text" placeholder="Name*" />
    </div>
    <div>
      <input type="text" placeholder="Email*" />
      <input type="text" placeholder="Phone*" />
    </div>
    <div>
      <input type="text" placeholder="Inquiry Type*" />
    </div>
    <div>
      <textarea
        name="message"
        cols="30"
        rows="10"
        placeholder="Message"
      ></textarea>
    </div>
    <ButtonWrapper>SEND MESSAGE</ButtonWrapper>
  </FormWrapper>
);
