import styled from "styled-components";

export const FaqWrapper = styled.section`
  display: grid;
  grid-template-columns: 1fr;
  margin: 5rem auto;
  width: 80vw;
  justify-content: center !important;
  div.accordion.styled {
    margin: 0 auto !important;

    div.active.title {
        color: #552D1E !important;
    }
    p {
        color: #552D1E;
    }
  }

  @media (max-width: 768px){
      width: 100%;
      padding: 2rem;
      div.accordion.styled {
        width: 90% !important;
      }
  }
`;
