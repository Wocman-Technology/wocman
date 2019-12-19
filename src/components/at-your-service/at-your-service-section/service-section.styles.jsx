import styled from "styled-components";

export const ServiceSectionWrapper = styled.section`
  display: grid;
  grid-template-columns: repeat(3, 250px);
  grid-gap: 2rem;
  justify-content: center;
  margin: 5rem 0;

  @media (min-width: 769px) and (max-width: 899px) {
    grid-template-columns: repeat(2, 270px);
    margin: 5rem auto;
    grid-gap: 3rem;
  }

  @media (max-width: 768px) {
    grid-template-columns: 270px;
    grid-gap: 4rem;
    padding: 0 4rem;
  }
`;
