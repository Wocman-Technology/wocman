import styled from "styled-components";

export const PopularCaregoriesWrapper = styled.section`
  margin-top: 4rem;
  display: grid;
  grid-template-columns: repeat(3, 300px);
  padding: 0 6rem;
  justify-content: space-around;

  @media (min-width: 768px) and (max-width: 1100px) {
    grid-template-columns: repeat(2, 300px);
  }

  @media (max-width: 768px) {
    grid-template-columns: 1fr;
    padding: 0 2rem;
    text-align: center;
    padding: 0 5rem;
  }
`;
