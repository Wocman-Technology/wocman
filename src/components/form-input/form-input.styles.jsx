import styled from "styled-components";

export const InputWrapper = styled.span`
  display: block;
  margin: 0 auto 2rem auto;
  padding: 0;

  input {
    height: 2rem;
    background: #ffffff;
    width: 100% !important;
    padding-left: 1rem;
    /* 32% Gray Light */

    border: 1px solid #adadad;
    box-sizing: border-box;
    border-radius: 4px;
  }
  input::placeholder {
    font: inherit;
    display: flex;
    align-items: center;
    letter-spacing: -0.25px;

    /* 48% Gray */
  }
`;
